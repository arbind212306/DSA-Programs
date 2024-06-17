function rotateArrayToRightByKSteps(array, steps) {
    //length of array
    const length = arr.length;
    //main loop iterates number of steps to rotate array
    for (let k=1; k<=steps; k++) {
        //nested loop rotates array
        for (i=0; i<=length-1; i++) {
            //check whether i+1 is less than array length, if yes then swap
            if (i+1 < length) {
                //swap elements of array
                [array[0], array[i+1]] = [array[i+1], array[0]];
            }
        }
    }

    return array;
}

const arr = [1,2,3,4,5,6,7];
const steps = 3;

console.log(rotateArrayToRightByKSteps(arr, steps));