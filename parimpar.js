function teste(){
	let num = Number(window.prompt('Digite um número'));
	let tipo;
	if (num % 2 == 0){
		tipo = '<strong>PAR<strong>';
	}else{
		tipo = '<strong>IMPAR<strong>';
	}
	
	document.write(num, " é ", tipo);
}