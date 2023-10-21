import time

def calcFibonacci(limit):
	a = 0;
	b = 1;
	t = 0;
	start_time = time.time()
	for i in range(0, limit):
		t = a;
		a = b;
		b = b + t;
	total_time =  ((time.time() - start_time) * 1000)
	print("Time: ", total_time, ' ms')
	return b

fib = calcFibonacci(1000)
print(fib)