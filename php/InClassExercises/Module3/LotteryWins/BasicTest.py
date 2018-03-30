import json
import urllib2

## Make sure you make your app public Window->Share

print 'Starting test 1 ....'
test = "cmd=reset"
url = 'https://csci343-mclacs.c9users.io/CSCI343-Public/php/InClassExercises/Module3/LotteryWins/Lottery.php?'+test
jsonTxt = urllib2.urlopen(url).read()
print 'Output ' + jsonTxt
j = json.loads(jsonTxt)
if j[0]["times"] == 0 and j[1]["times"] == 0 and j[2]["times"] == 0 and j[3]["times"] == 0 and j[4]["times"] == 0:
    print "success"
else:
    print "fail"

print 'Starting test 2 ....'
test = "cmd=add&day=Wednesday"
url = 'https://csci343-mclacs.c9users.io/CSCI343-Public/php/InClassExercises/Module3/LotteryWins/Lottery.php?'+test
jsonTxt = urllib2.urlopen(url).read()
print 'Output ' + jsonTxt
j = json.loads(jsonTxt)
if j[0]["times"] == 0 and j[1]["times"] == 0 and j[2]["times"] == 1 and j[3]["times"] == 0 and j[4]["times"] == 0:
    print "success"
else:
    print "fail"

print 'Starting test 3 ....'
test = "cmd=add&day=Wednesday"
url = 'https://csci343-mclacs.c9users.io/CSCI343-Public/php/InClassExercises/Module3/LotteryWins/Lottery.php?'+test
jsonTxt = urllib2.urlopen(url).read()
print 'Output ' + jsonTxt
j = json.loads(jsonTxt)
if j[0]["times"] == 0 and j[1]["times"] == 0 and j[2]["times"] == 2 and j[3]["times"] == 0 and j[4]["times"] == 0:
    print "success"
else:
    print "fail"
