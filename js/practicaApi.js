const input = document.querySelector("input");
const button = document.querySelector("button");
const pokemonContainer = document.querySelector(".pokemon-container");
const button2 = document.getElementById("btn2");

button.addEventListener("click", (e) => {
    e.preventDefault();
    if(input.value == ''){
        alert('Please, introduce a pokemon name');
    }

    getPokemon(input.value); 
})

button2.addEventListener("click", deletePokemons);


function getPokemon(pokemon){
    fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}/`)
    .then(respuesta => respuesta.json())
    .then(data => {
        createPokemon(data);
    });
}

function createPokemon(pokemon){

    let img = document.createElement("img");
    img.src = pokemon.sprites.front_default;

    let h3 = document.createElement("h3");
    h3.textContent= pokemon.name;

    let div = document.createElement("div");
    div.appendChild(img);
    div.appendChild(h3);

    pokemonContainer.appendChild(div);

    
}

function deletePokemons(){
   let children = pokemonContainer.childNodes;
   children = Array.from(children);

   children.forEach(elements => {
       elements.remove(elements)});
}





















