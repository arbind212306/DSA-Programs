const MyHashSet = function () {
    this.set = {};
}

MyHashSet.prototype.add = function (key) {
    this.set[key] = true;
}

MyHashSet.prototype.remove = function (key) {
    delete this.set[key];
}

MyHashSet.prototype.contains = function (key) {
    return this.set.hasOwnProperty(key);
}

const hashSet = new MyHashSet();
hashSet.add(1);
hashSet.add(2);
console.log(hashSet.contains(2));
hashSet.add(4);
hashSet.remove(2);
console.log(hashSet.contains(2));