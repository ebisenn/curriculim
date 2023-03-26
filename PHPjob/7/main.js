//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
    for(let i =0; i<numbers.length; i++){
        let num=numbers[i];
        if(num%2===0){
            console.log(num + 'は偶数です'); 
        }   
    }
}
isEven();

//問2
class Car{
    constructor(gass,number){
        this.gass=gass;
        this.number=number;
    }

    getNumGas(){
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.number}です。`);
    }
}

let aaa =new Car(20,9999);
aaa.getNumGas();