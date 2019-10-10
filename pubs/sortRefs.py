#!/usr/bin/python

import sys
import re

if (len(sys.argv) != 2):
    print 'You need to pass in the unsorted HTML file.'
    sys.exit(1)

try:
    htmlfile=open(sys.argv[1],'r')
except IOError:
    print 'Invalid file. Does it exist?'
    sys.exit(2)

allLines=htmlfile.readlines()
htmlfile.close()

tupleList=[]

for line in allLines:
    # Remove the newline and carriage return
    sansNewline = line.strip('\n')
    sansNewline = sansNewline.strip('\r')

    # Find a group of 4 digits in a row (yeah, we'll have a year-10000
    # problem, but what're ya gonna do?) and put it in a group called yearstr
    p_year = re.compile('\((?P<yearstr>[0-9]{4})\)')
    m_year = p_year.search(sansNewline)

    if m_year:
        try:
            year = int(m_year.group('yearstr'))
        except ValueError:
            print 'RegEx matched something wrong. Check the file.'
            sys.exit(3)
    else:
        print 'There\'s a line without a valid year!'
        sys.exit(4)

    # Let's bundle the line with the year in a tuple
    temptuple = (year, sansNewline)
    tupleList.append(temptuple)

# Now let's sort the tupleList by the year in ascending order, then reverse
tupleList = sorted(tupleList, key=lambda oneTuple: oneTuple[0])
tupleList.reverse()

# Get the first year from the first item
currYear = tupleList[0][0]
print '<h3>{0}</h3>'.format(currYear)
print '<ul>'

for eachTuple in tupleList:
    if (eachTuple[0] == currYear):
        print eachTuple[1]
    else:
        currYear = eachTuple[0]
        print '</ul>'
        print '<h3>{0}</h3>'.format(currYear)
        print '<ul>'
        print eachTuple[1]

# Close the last ul tag
print '</ul>'
