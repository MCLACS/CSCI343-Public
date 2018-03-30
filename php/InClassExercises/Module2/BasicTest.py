import json
import urllib2

## Make sure you make your app public Window->Share

print 'Starting test 1 ....'
test = "cmd=add&num[]=2&num[]=4"
url = 'https://csci343-mclacs.c9users.io/CSCI343-Public/php/InClassExercises/Module2/math.php?'+test
jsonTxt = urllib2.urlopen(url).read()
print 'Output ' + jsonTxt
j = json.loads(jsonTxt)
if j["result"] == 6:
    print "success"
else:
    print "fail"
    
print 'Starting test 2 ....'
test = "cmd=sub&num[]=6&num[]=1"
url = 'https://csci343-mclacs.c9users.io/CSCI343-Public/php/InClassExercises/Module2/math.php?'+test
jsonTxt = urllib2.urlopen(url).read()
print 'Output ' + jsonTxt
j = json.loads(jsonTxt)
if j["result"] == 5:
    print "success"
else:
    print "fail"