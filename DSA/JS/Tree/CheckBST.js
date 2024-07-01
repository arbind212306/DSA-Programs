class Node {
    constructor(val) {
        this.val = val
        this.left = null;
        this.right = null;
    }
}

class BST {
    constructor() {
        this.root = null
    }

    insert(val) {
        const newNode = new Node(val)
        if (this.root === null) {
            this.root = newNode
        }

        let temp = this.root
        while(true) {
            if (temp.val === newNode.val) return undefined
            if (newNode.val < temp.val) {
                if (temp.left === null) {
                    temp.left = newNode
                    return
                }
                temp = temp.left
            } else {
                if (temp.right === null) {
                    temp.right = newNode
                    return
                }
                temp = temp.right
            }
        }
    }

    isBST() {

        function traverse(currentNode, min = null , max = null) {
            if (currentNode === null) return true
            if (min !== null && currentNode.val <= min || max !== null && currentNode.val >= max) return false

            return traverse(currentNode.left, min, currentNode.val) && traverse(currentNode.right, currentNode.val, max)
        }
       
       return traverse(this.root)
    }
}

const bst = new BST
bst.insert(47)
bst.insert(21)
bst.insert(76)
bst.insert(18)
bst.insert(27)
bst.insert(52)
bst.insert(82)
console.log(bst)

console.log(bst.isBST())