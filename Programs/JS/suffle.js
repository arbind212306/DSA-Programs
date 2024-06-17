function suffle(array) {
    for (let i=array.length-1; i>=0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

const array = [23,1,5,6,7];
console.log(suffle(array));