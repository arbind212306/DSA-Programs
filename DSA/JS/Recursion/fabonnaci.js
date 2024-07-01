// Get current time in milliseconds
let startTime = new Date().getTime(); 

function fibonnaci(n) {
    //Base case
    if (n === 2 || n <= 1) return 1

    return fibonnaci(n-1) + fibonnaci(n-2)
}

// Your function or code block here
let endTime = new Date().getTime();
// Calculate execution time in milliseconds
executionTime = endTime - startTime;
// console.log(fibonnaci(5), 'executionTime - '+executionTime)

function fibonnaci1(n, memo = []) {
    //check if already exists
    if (memo[n]) return memo[n]
    //Base case
    if (n === 2 || n <= 1) return 1

    memo[n] = fibonnaci1(n-1) + fibonnaci1(n-2)
    return memo[n]
}

// console.log(fibonnaci1(6))


function fibonnaci2(n)  {
    if (n === 2 || n <= 1) return 1
    let first = 1
    let second = 1
    let sum = 0
    for (i=3; i<=n; i++) {
        sum = first + second
        first = second
        second = sum
    }
    return sum
}

console.log(fibonnaci2(6))