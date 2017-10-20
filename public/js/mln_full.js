  "use strict";
  (function($)
  {
    $.fn.mln_full = function(opcoes)
    {
      return this.each (function(i,v)
      {
        //HTML
        var menu = '<nav id="menu_dir" class=""><ul>';
        $(opcoes.target).each(function( index, element )
        {
          if(index == '0')
          {
            var menu_text = opcoes.itens[index];
            if(!menu_text)
            {
              menu_text = 'Sessão '+index;
            }
            menu += '<li data-page="'+index+'"><div></div><span id="menupage'+index+'" class="show">'+menu_text+'</span></li>';
          }
          else
          {
            var menu_text = opcoes.itens[index];
            if(!menu_text)
            {
              menu_text = 'Sessão '+index;
            }
            menu += '<li data-page="'+index+'"><div></div><span id="menupage'+index+'" style="display: none;">'+menu_text+'</span></li>';
          }
        });
        menu += '</ul></nav>';
        $('body').prepend(menu);
        
        //CSS
        var css = '<style type="text/css">';
        css += '.hide{display: none !important;}';
        css += '.show{display: block !important;}';
        css += 'nav#menu_dir {position: fixed; right: 10px; top: 50%; height: 260px; margin-top: -130px; z-index: 99; }';
        css += 'nav#menu_dir ul {float: left; width: 140px; }';
        css += 'nav#menu_dir ul li {float: left; width: 100%; cursor: pointer; cursor: hand; color: '+opcoes.color+'; font-size: 13px; padding: 3px 0px;}';
        css += 'nav#menu_dir li span { float: right; display: none; text-align: right; margin-right: 10px; margin-top: -3px; }';
        css += 'nav#menu_dir li div { float: right; height: 17px; width: 17px; background-color: '+opcoes.color+'; border-radius: 50%; -moz-border-radius: 50%; }';
        css += 'nav#menu_dir li div.sel { background-color: '+opcoes.hover+'; }';
        css += '</style>';
        $('body').prepend(css);

        //JS
        var mln_pag_atual = 1;
        var mln_tela_atual = 0;
        var mln_tela_atual = 0;
        var mln_alturas = new Array();

        //add classes de controle
        $('.mln_sec').each(function(a,b)
        {
          $(b).addClass('mln_full'+a);
          $(b).attr('data-page',a);
        });

        //tamanho da tela
        function mln_resize()
        {
          if(opcoes.full)
          {
            //$(opcoes.target).css('height', $(window).height()+'px');
            $(opcoes.target).css('height', window.innerHeight +'px');
          }

          $('.mln_sec').each(function(a,b)
          {
            mln_alturas[a] = $(b).outerHeight();
          });
          console.log(mln_alturas);
        }

        $(window).resize(function()
        { 
          mln_resize(); 
        });
        mln_resize();

        //calcular abrir menu lateral
        $(window).scroll(function () 
        {
          var top = $(window).scrollTop();
          //top = top + 300;

          var aux_tela = 0;
          var total_height = 0;
          var i = 0;
          for(i; i < mln_alturas.length; i++)
          {
            total_height += mln_alturas[i];
            if(top < total_height)
            {
              mln_tela_atual = i;
              break;
            }
          }

          //var dif = (mln_tela_atual+1);
          var dif = mln_tela_atual;
          
          if(dif != mln_pag_atual)
          {
            mln_pag_atual = dif;

              $('nav#menu_dir').removeClass('hide');
              $('nav#menu_dir li span').removeClass('show');
              $('nav#menu_dir li div').removeClass('sel');
              $('#menupage'+mln_pag_atual).addClass('show');
              $('#menupage'+mln_pag_atual).parent().find('div').addClass('sel');
          }               
        });

        //clique no menu
        $("nav#menu_dir li").click(function() 
        {
          var page = $(this).attr('data-page');
          $('html, body').animate({
            scrollTop: $('.mln_full'+page).offset().top
          }, 1000);
        });

        //open menu
        $('nav#menu_dir li div').hover(function()
        {
          $(this).next().css('display', 'block');
          $(this).addClass('sel');
        },
        function()
        {
        });

        $('nav#menu_dir li').hover(function()
        {
        },
        function()
        {
          $(this).find('span').css('display', 'none');
          $(this).find('div').removeClass('sel');
        });

      });
    }
  })( jQuery );
