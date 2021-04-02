function print() {
    for (j = 1; j < 8; j++) {
        console.log("*")
        for (i = 1; i <= 4; i++) {
            console.log("*")
        }
        console.log(null)
    }
}
// print();

function put(n) {
    triangle(n);
    if (n > 0) {
        put(n - 1);
        triangle(n);
    }
}

function triangle(size) {
    for (i = 0; i < size; i++) {
        document.write("*");
    }
    document.write("<br>")
}
put(10);