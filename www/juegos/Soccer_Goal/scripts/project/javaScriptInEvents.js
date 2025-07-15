

const scriptsInEvents = {

	async Es_game_Event65_Act2(runtime, localVars) {

		if (runtime.globalVars.ultima_puntuacion != runtime.globalVars.score) {
			runtime.globalVars.ultima_puntuacion = runtime.globalVars.score
			console.log(runtime.globalVars.score)
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
			let data = runtime.globalVars.score
			let dataPrepared = {
				pt: data,
				id_juego: 3, // Soccer Goal
			}
			enviarDatos(dataPrepared)
		}
	}
};

globalThis.C3.JavaScriptInEvents = scriptsInEvents;
