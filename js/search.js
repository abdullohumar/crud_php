const searchBar = document.querySelector('#search_bar'),
searchList = document.querySelector('#tbody');

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'php/search.php', true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                searchList.innerHTML = data;
            }
        }
    }

    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xhr.send('searchTerm=' + searchTerm);
}