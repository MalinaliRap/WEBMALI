//executado quando toda a tela for carregada
$(function(){
	
	//para cada campo obrigatório, fazer:
	$(".required").each(function(){
		console.log('nome do campo: '+$(this).attr('name'));
	});
	
	//focus: quando entra no elemento
	//blur: quando sai do elemento
	$("input").on('blur', function(){
		console.log('saiu do elemento: '+$(this).attr('name'));
	});
	
	//on submit event
	$('form').on('submit', function(){
		
		var valido = true;
		$(this).find('.required').each(function(){
			
			if($(this).val()==''){
				
				$(this).addClass('error');
				valido = false;
				
			}else{
				$(this).removeClass('error');
			}
			
		});
		
		
		return valido;
	});
	
	$('nav>ul>li').each(function(){
		var posicao_submenu = $(this).offset().left;
		var altura_submenu = $(this).offset().top +18;
		
		if($(this).children('ul').length>0){
			console.log('entrou');
			$(this).find('ul').first().css('left', posicao_submenu);
			$(this).find('ul').first().css('top', altura_submenu);
		}else{
			console.log('sem submenu');
		}
	});
});

//tarefa 1: tragam dúvidas
//tarefa 2:criar um submenu abaixo de video, que tenha as opções:
//video e audio, separando a tela atual de video em duas