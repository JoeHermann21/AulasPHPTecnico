function teste(){
	let hora = Number(window.prompt('Digite um horário'));

	if (hora >= 0 && hora < 12){
		document.write("Bom dia! Agora são ", hora, " horas");
	}else if (hora < 18){
		document.write("Boa tarde! Agora são ", hora, " horas");
	}else if (hora < 24){
		document.write("Boa noite! Agora são ", hora, " horas");
	}else{
		cumprimento = 'Hora inválida!!! ';
		document.write(cumprimento);		
	}

}