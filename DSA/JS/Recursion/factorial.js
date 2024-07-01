function factorial(n) {
    //base case
    if (n === 0 || n === 1) {
        return 1
    }

    return n * factorial(n-1)
}

// console.log(factorial(5))

/**
 * This above program can be optimized by two approach
 * 1 - Top-down approach (Memoization)
 * 2 - Bottom-up approach (Tabulation)
 * 
 */
function factorial1(n, memo = []) {
    //Base case
    if (n === 0 || n === 1) {
        return 1
    }
    //Check if value is already stored
    if (memo[n]) {
        return memo[n]
    }

    memo[n] = n * factorial1(n-1, memo)
    return memo[n]
}

// console.log(factorial1(5))

//Tabulation approach
function factorial2(n) {
    if (n === 0 || n === 1) {
        return 1
    }

    let fact = 1
    for (i=2; i<=n; i++) {
        fact = fact*i
    }

    return fact
}

console.log(factorial2(5))