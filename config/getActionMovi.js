const API_KEY = 'api_key=5f34de6d955086639e8891dbbfb55c64';
const BASE_URL = 'https://api.themoviedb.org/3';
const API_URL = BASE_URL + '/movie/637649/similar?' + API_KEY;
const IMG_URl = 'https://image.tmdb.org/t/p/w500'
const main = document.getElementById('actiontv-id');
// 637649
///discover/movie?sort_by=popularity.desc&
function getMovies(url) {
    fetch(url).then(res => res.json()).then(data => {

        // console.log(data.results);
        showMovies(data.results);
    })
}

function showMovies(data) {
    main.innerHTML = '';

    for (let c = 1; c <= data.length; c++) {
        const { title, poster_path, overview, vote_average, release_date } = data[c];
        const movieEl = document.createElement('div')
        movieEl.classList.add('movie');
        movieEl.innerHTML = `  
                        <div class="item">
                            <img src="${IMG_URl + poster_path}" alt="${title}" class="item-img">
                            <h5>${title}</h5>
                            <div class="mt-3 info-latest">
                                <p>${overview}</p>
                                <h6 class="rating-more">Imbd:${vote_average}</h6>
                            </div>
                            <div class="cost mt-3 text-dark">
                                <p class="date">Released :${release_date }</p>
                            </div>
                         </div>

        `
        main.appendChild(movieEl);

    }
}
getMovies(API_URL)