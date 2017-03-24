	var soma = 0;
	var numeros = [];
	console.log('Soma: ' + soma);
	while (soma < 1000) {
		numero = Math.random() * 100;
		if (numeros.indexOf(numero) < 0) {
			numeros.push(numero);
			soma += parseInt(numero);
			console.log('Soma: ' + soma);
		}
	}