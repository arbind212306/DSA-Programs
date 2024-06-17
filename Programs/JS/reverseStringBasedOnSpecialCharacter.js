function reverseStringBasedOnSpecialCharacter(string) {
  const len = string.length;
  let revString = '';
  const hash = [];
  for (let i=len-1; i>=0; i--) {
    let char = string[i]
    if (containsSpecialChars(char)) {
        hash.push({char: char, position: i})
    }else {
      revString = revString + char;
    }
  }

  for (let j=hash.length - 1; j>=0; j--) {
    revString = revString.slice(0, hash[j].position) + hash[j].char + revString.slice(hash[j].position);
  }
  return revString;
}

function containsSpecialChars(str) {
    const specialChars = /[`\' \'!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    return specialChars.test(str);
  }

console.log(reverseStringBasedOnSpecialCharacter('&abc$d'));

// const books = ['the Gentle Man', 'to kill a mockingbird','a preety girl']
// // Use map to create a new array with capitalized book titles
// const formattedBooks = books.map((book => {
//   const split = book.split(" ");
//   return split.join(' ');
// }))

// console.log(formattedBooks);


const array = [4,5,3,7,9,2];