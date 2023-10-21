function calcFibonacci(limit){
	console.time();
	// let a = BigInt(0);
	// let b = BigInt(1);
	// let t = BigInt(0);
	let a = 0;
	let b = 1;
	let t = 0;
	for (let i = 0; i < limit; i++){
		t = a;
		a = b;
		b = b + t;
	}
	console.timeEnd();
	return b;
}
console.log(calcFibonacci(1000));

