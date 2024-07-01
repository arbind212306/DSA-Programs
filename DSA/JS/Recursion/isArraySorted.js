function isSorted(arr, index = 0) {
    //Base case
    if (index >= arr.length) return true

    if(arr[index] > arr[index + 1]) return false

    return isSorted(arr, index + 1)
}

console.log(isSorted([2,3,6,8,10,1]))