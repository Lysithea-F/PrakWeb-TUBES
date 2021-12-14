fetch("https://imdb8.p.rapidapi.com/title/get-genres?tconst=game", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "imdb8.p.rapidapi.com",
		"x-rapidapi-key": "5762e822dcmshdf4c7ade1c1b32dp1c9298jsn38e1ae7478ff"
	}
})
.then(response => response.json())
.then(data => {
    const list = data.d;

    list.map((item) => {
        const name = item.l;
        const poster = item.i.imageUrl;
        const movie = `<li><img src="${poster}"> <h2>${name}</h2></li>`
        document.querySelector('.movies').innerHTML += movie;
    })
})

.catch(err => {
	console.error(err);
});