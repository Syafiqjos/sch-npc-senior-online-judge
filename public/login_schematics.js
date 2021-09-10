function loginFailed(){
	alert('Anda belum terdaftar di portal Schematics NPC 2021.\nSilahkan login Schematics apabila belum login.\nAnda akan di-redirect ke halaman login Schematics.\nTerima kasih.');
	location.href = 'https://schematics.its.ac.id/dashboard/signin';
}

function getSchematicsToken(){
	return "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InN5YWZpcWpvc0BnbWFpbC5jb20iLCJuYW1lIjoiQWhtYWQgU3lhZmlxIEFxaWwgV2FmaSIsInBob25lIjoiKzYyODU2MzA2NTgxNiIsInVzZXJfcm9sZSI6InVzZXIiLCJleHAiOjE2MzEyOTU4MDh9.5RvW2ObIfX5FvwOtxafX3iubB4MPXluy_jNSXiUhaPY";
}

function tryLogin(){
	try {
		const domjudgeLogin = document.location.origin + "/login";
		const domjudgeKey = getSchematicsToken();
		const domjudgePass = "aGFydXRtYXJ1dA==";

		let formData = new FormData();
		formData.append('loginmethod', 'xheaders');

		const response = fetch(domjudgeLogin,
		{
			headers: {
			  "X-DOMjudge-Login": domjudgeKey,
			  "X-DOMjudge-Pass": domjudgePass
			},
			method: "POST",
			body: formData,
			mode: 'same-origin'
		}).then(function(response) { 
			return response.text();
		}).then((html) => {
			if (html.match('"__INVALID__"') === null){
				location.reload();
			} else {
				loginFailed();
			}
		}).catch((err) => {
			console.log(err);

			loginFailed();
		});

		console.log('sapi');
	} catch(e) {
		console.log('error :');
		console.log(e);

		loginFailed();
	}
}
