

const scriptsInEvents = {

	async Game_Event2_Act1(runtime, localVars)
	{
		let vidas = runtime.globalVars.life;
		let puntos = runtime.globalVars.score;
		
		function enviarDatos(data) {
									fetch('http://localhost:8000/server/api_puntos.php', {
										method: 'POST',
										headers: {
										'Content-Type': 'application/json'
										},
										body: JSON.stringify(data)
									})
									.then(response => response.text())
									.then(resultado => {
										console.log(resultado);                     // Comprobamos los datos recibidos por el servidor
									})
									.catch(error => {
										console.error('Error:', error);
									});
									}
							
							let dataPrepared = {
								pt : puntos,
								id_juego : 2, //Free Kick 
							}
							enviarDatos(dataPrepared)
	}
};

globalThis.C3.JavaScriptInEvents = scriptsInEvents;
