const result = [];

function place(k, i) {
    for (j = 1) {
        if (result[j] = i) {
            return false;
        }
    }
    return true;
}
Nqueens(k, n) {
    for (i = 1; i <= n; i++) {
        if (place(k, i)) {
            result[k] = i;
            if (k === n) {
                console.log(result);
            } else {
                Nqueens(k++, n)
            }
        }
    }
}