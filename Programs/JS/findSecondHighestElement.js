function findSecondHighestElement(array) {
   
    if (Array.isArray(array) && array.length > 0) {
        let max = array[0];
        let secondMax =0;
        for (i=1; i<array.length; i++) {
            if (array[i] > max) {
                secondMax = max;
                max = array[i];
            } else {
                if (array[i] >= secondMax) {
                    secondMax = array[i];
                }
            }
        }
        return secondMax;
    }

    return "Please provide valid input";
    
}

const array = [90,5,103,65,111,70,17,34];

console.log(findSecondHighestElement(array));