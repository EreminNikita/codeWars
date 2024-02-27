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

arrFix([1,4,9,15]); */


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

/* function countTrue(arr) {
    var count = 0;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] === true) {
            count++;
        }
    }
    console.log(count);
}

countTrue([true,false,true,true]) */


// !8

/* function findNeedle(arr) {
    var index;
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] === 2) {
            index = i;
            console.log(`элемент найден на позиции ${index}`);
            break;
        }
    }
}

findNeedle([1, 2, 3, 4, 5]) */


/* function findIndex(arr, target) {
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === target) {
            return i;
        }
    }
    return -1;
}

const position = findIndex([1, 2, 4, 5, 3], 3);
console.log("Позиция элемента:", position); */


// !8

/* function friend(friends) {
     console.log(friends.filter(s => s.length === 4));
}

friend([1,'Alex']); */


// !8

/* function friend(array) {
    let res = []
    for (itm of array) {
        res.push(-itm)
    }
    console.log(res);
}

friend([1, -2, 3, 4, -5]) */


// !8

/* function between(a, b) {
    const arrNew = [];
    for (let i = a; i <= b; i++) {
        arrNew.push(i);
    }
    return arrNew;
}
console.log(between(-3, 5)); */


// !8

/* function repeatString(n, s) {
    let result = "";
    for (let i = 0; i < n; i++) {
        result = result + s;
    }
    return result;
}

console.log(repeatString(2, "I"));
console.log(repeatString(5, "Hello")); */


// !8

/* function toCsvText(array) {
    let x = array.map(row => row.join(',')).join('\n');
    console.log(x);
}

toCsvText([[1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]]) */


// !8

/* function monkeyCount(n) {
    let res = [];
    for (let i = 1; i <= n; i++) {
        res.push(i);
    }
    console.log(res);
}

monkeyCount(5); */


// !8

/* function grow(x) {
    let res = 1;
    for (let i = 0; i < x.length; i++) {
        res = res * x[i]
    }
    console.log(res);
}

grow([1, 2, 3, 4,5]) */


// !8 Counting true...

/* function countSheeps(sheep) {
    let count = 0;
    for (elm of sheep) {
        if (elm === true) {
            count++;
        }
    }
    console.log(count);
}

countSheeps([1, 'true', true, false, true, true, true]) */


// !8 Well of Ideas...

/* function well(x) {
    let fail = 0;
    let publish = 0;
    for (let i = 0; i < x.length; i++) {
        if (x[i] === 'bad') {
            fail++;
        }
        else if (x[i] === 'good') {
            publish++;
        }
    }

    if (publish === 0) {
        return 'Fail!';
    } else if (publish <= 2) {
        return 'Publish!';
    } else {
        return 'I smell a series!';
    }

    // return publish === 0 ? 'Fail!' : publish <= 2 ? 'Publish!' : 'I smell a series!';
}

well(['bad', 'bad', 'bad',])
well(['good', 'good', 'good', 'str', 'goodstr']) */


// !8 Find numbers which are divisible by given number...

/* function divisibleBy(numbers, divisor) {
let res = [];
    for (num of numbers) {
        if(num % divisor === 0) {
            res.push(num)
        }
    }
    console.log(res);
}

divisibleBy([1, 2, 3, 4, 5, 6], 2) */