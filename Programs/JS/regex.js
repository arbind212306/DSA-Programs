// 1. Create a regex that finds dates in the format MM/DD/YY or MM/DD/YYYY and returns just the year part.
const pattern1 = /\d{2}\/\d{2}\/(\d{4}|\d{2})/
const date1 = "03/02/943"
console.log(date1.match(pattern1))