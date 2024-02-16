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

maps([1, 2, 10, 50]) */


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


// !8

/* function peopleWithAgeDrink(old) {
    if (old < 14) {
        console.log('Kids drink toddy');
    }
    else if (old >= 14 && old < 18) {
        console.log('Teens drink coke');
    }
    else if (old >= 18 && old < 21) {
        console.log('Young adults drink beer');
    }
    else if (old >= 21) {
        console.log('Adults drink whisky');
    }
};
peopleWithAgeDrink(17) */


// !8

/* function countPositivesSumNegatives(arr) {
    if (!arr || arr.length === 0) {
        return [];
    }

    let countPositives = 0;
    let sumNegatives = 0;

    for (let num of arr) {
        if (num > 0) {
            countPositives++;
        }
        else if (num < 0) {
            sumNegatives += num;
        }
    }

    console.log([countPositives, sumNegatives]);
}

countPositivesSumNegatives([1, 2, 3, 4, -1, -3]) */


// !8

/* var number = function (array) {
    console.log(array.map((value, index) => `${index + 1}: ${value}`));
}

number(['str1', 'str2', 'str3']) */


// !8

/* function addUp(num) {
    let sum = 0;
    let i = 1;
    while (i <= num) {
        sum += i;
        i++;
    }
    console.log("Сумма арифметической прогрессии:", sum);
}

addUp(5) */


// !8

function countTrue(arr) {
    var count = 0;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] === true) {
            count++;
        }
    }
    console.log(count);
}

countTrue([true,false,true,true])