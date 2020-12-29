

def binarySearch(my_array, arraySize, my_value):
    leftBound = 0
    rightBound = arraySize - 1

    while(leftBound < rightBound):
        print("un ciclo\n")
        middle = (int)((rightBound + leftBound) / 2)

        if(my_array[middle] == my_value):
            return middle
        elif(my_array[middle] < my_value):
            leftBound = middle + 1
        else:
            rightBound = middle - 1

    return -1


my_list = [0,8,25,50,74,81,139,162,197,241,270,300,350,400,500,1000]

print(binarySearch(my_list, len(my_list), 400))