/**
 *       47
 *      /  \
 *     21   76
 *    / \   / \
 *  18  27 52 82
 */

class Node {
    constructor(value) {
        this.value = value
        this.left = null
        this.right = null
    }
}

class BST {
    constructor() {
        this.root = null;
    }

    insert(value) {
        const newNode = new Node(value)
        if (this.root === null) {
            this.root = newNode
            return this
        }
        let temp = this.root
        while(true) {
            if (newNode.value === temp.value) return undefined
            if (newNode.value < temp.value) {
                if (temp.left === null) {
                    temp.left = newNode
                    return this
                }
                temp = temp.left
            } else {
                if (temp.right === null) {
                    temp.right = newNode
                    return this
                }
                temp = temp.right
            }
        }
    }

    contains(value) {
        if (this.root === null) return false
        let temp = this.root
        while(temp) {
            if (value < temp.value) {
                temp = temp.left
            } else if (value > temp.value) {
                    temp = temp.right
            } else {
                return true;
            }
        }
        return false
    }

    /**
     * visit root
     * traverse left
     * traverse right
     * 
     * works on queue data structure
     */
    BFS() {
        let currentNode = this.root
        let queue = []
        let result = []
        queue.push(currentNode)

        while(queue.length) {
            currentNode = queue.shift()
            result.push(currentNode.value)
            if (currentNode.left) queue.push(currentNode.left)
            if (currentNode.right) queue.push(currentNode.right)
        }
        return result
    }

    /**
     * visit root
     * traverse left subtree
     * traverse right subtree 
     * 
     * DFS works on stack data structure
     */
    DFSPreOrder() {
       const result = []
       function traverse(currentNode) {
            result.push(currentNode.value)
            if (currentNode.left) traverse(currentNode.left)
            if (currentNode.right) traverse(currentNode.right)
       }

       traverse(this.root)
       return result
    }

    /**
     * traverse the left subtree
     * traverse the right subtree
     * visit root
     * 
     * DFS works on stack data structure
     */
    DFSPostOrder() {
        const result = []
        function traverse(currentNode) {
            if (currentNode.left) traverse(currentNode.left)
            if (currentNode.right) traverse(currentNode.right)
            result.push(currentNode.value)
        }

        traverse(this.root)
        return result
    }

    /**
     * traverse the left subtree
     * visit root
     * traverse right subtree
     * 
     * DFS works on stack data structure
     */
    DFSInOrder() {
        const result = []
        function traverse(currentNode) {
            if (currentNode.left) traverse(currentNode.left)
            result.push(currentNode.value)
            if (currentNode.right) traverse(currentNode.right)
        }

        traverse(this.root)
        return result
    }
}

const b = new BST
b.insert(47)
b.insert(21)
b.insert(76)
b.insert(18)
b.insert(27)
b.insert(52)
b.insert(82)

console.log("===== contains =====", b.contains(52))

console.log('===== BFS =====', b.BFS())
console.log('===== DFS Pre Order =====', b.DFSPreOrder())
console.log('===== DFS Post Order =====', b.DFSPostOrder())
console.log('===== DFS In Order =====', b.DFSInOrder())
