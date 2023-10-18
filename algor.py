import firebase_admin
from firebase_admin import credentials
from firebase_admin import db

# Initialize Firebase
'''
cred = credentials.Certificate("D:/firebasekey.json")
firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://elective-management-99336-default-rtdb.asia-southeast1.firebasedatabase.app'
})
'''
# Reference to the database
ref = db.reference('priority')

data2 = ref.get()

data = dict()
sorteddata = dict(sorted(data2.items(), key=lambda x: x[1]['timestamp']))

for key, value in sorteddata.items():
    data[key] = {'priority': value['priority']}
print(data)


NewData = {}
coursedata = ['19CSE351', '19CSE352', '19CSE336', '19CSE337', '19CSE340', '19CSE342']
coursenames=['computational statistics and inference theory',
             'Business Analytics',
             'digital currency programming',
             'social networking security',
             'Advanced Computer Networks',
             'wireless and mobile communication']
for username, UserData in data.items():
    priorities = UserData['priority']
    NewPriorities = []
    for i, priority in enumerate(priorities.split(',')):
        NewPriority = f"({priority},{i+1})"
        NewPriorities.append(NewPriority)
    srt = sorted(NewPriorities)
    NewData[username] = {'priority': ','.join(srt)}


NewPriority = []
for user, data in NewData.items():
    priority_list = data.get('priority')
    courses = [course.strip().split(',')[1] for course in priority_list.split('),(')]
    courses = [course[1:] if course.startswith('(') else course for course in courses]
    courses = [course[:-1] if course.endswith(')') else course for course in courses]
    NewPriority.append([coursedata[int(course) - 1] for course in courses])


print(NewPriority)

TotalUsers = len(NewData)
TotalCourcses = len(coursedata)
availableseats = 1

givencourse = {}
AvailableCourse = coursedata * availableseats


for user, courses in enumerate(NewPriority, 1):
    givencourse[user] = None
    for course in courses:
        if course in AvailableCourse:
            givencourse[user] = course
            AvailableCourse.remove(course)
            break

update_set=dict()

for user, course in givencourse.items():
    if course is not None:
        username = list(NewData.keys())[user - 1]
        update_set[username]=coursenames[coursedata.index(course)]
        
for i,j in update_set.items():
    ref = db.reference('priority/'+i)
    ref.update({'allotment':j})
       
