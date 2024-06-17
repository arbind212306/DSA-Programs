function findMissingNumber(array, size) {
    //formula to find sum of n natural numbers
    let total = Math.floor((size+1)*(size+2)/2);
    for (i=0; i<size; i++) {
        total = total - array[i];
    }

    return total;
}

const array = [ 1, 2, 3, 4, 5 , 7];
const size = 5;

console.log(findMissingNumber(array, size))