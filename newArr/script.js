
// !8

function arrFix(num) {

    var minVal = num[0];
    var maxVal = num[num.length - 1];

    const arrNew = [];

    var current = minVal;


    while (current <= maxVal) {
        arrNew.push(current);
        current++;
    }
    console.log(arrNew);

}

arrFix([1, 7]);