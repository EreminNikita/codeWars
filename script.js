// ! 8

/* function greet(name){
    return `Hello, ${name} how are you doing today?`
  } */


// ! 8


/* function reverseList(list) {

    console.log(list.reverse());
}

reverseList([1, 'test', true]); */


// !8

/* function arrFix(num) {

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

arrFix([1, 7]); */


// !8

/* function maps(x) {
    return x.map(function (num) {
        console.log(num * 2);
        // return num * num
    })
} */

/* function maps(x){
    console.log(x.map(n => n * 2));
  }

maps([1, 2,10,50]) */


// !8

/* function problem(x){
    //your code here
    if(typeof x === 'string') {
        console.log('err');
    }
    else  {
        console.log(x * 50 + 6);
    }
  }
  problem(10) */