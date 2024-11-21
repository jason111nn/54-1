data_2d = [[90,30,40],
           [20,40,90],
           [70,80,70],
           [60,30,20]
]
data_sum = [0,0,0,0]
data_count = len(data_sum)
animal_names = ['企鵝','兔子','黑熊','烏龜']
animal_num = len(animal_names)

for i in range(animal_num):
    for j in range(3):
        data_sum[i] += data_2d[i][j]

print('總分統計結果如下:')
print(animal_names)
print(data_sum)
print()

def one_bubble(data_sum, animal_names, i, n):
    for j in range(n - i - 1):
        if data_sum[j] < data_sum[j + 1]:
            data_sum[j], data_sum[j + 1] = data_sum[j + 1], data_sum[j]
            animal_names[j], animal_names[j + 1] = animal_names[j + 1], animal_names[j]


for i in range(data_count - 1):
    one_bubble(data_sum, animal_names, i, data_count)

for i in range(3):
    print(f'第{i + 1}名: {animal_names[i]}')
