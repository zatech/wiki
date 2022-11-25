---
layout: channel
title: loadshedding
permalink: /loadshedding
---

## FAQ 

**Q**: How big a system do I need to keep **insert items** powered during Loadshedding?
*A1*: You connect a measurement device to the equipment that you want to power, and measure the startup peaks when they are all turned on simultaneously as well as the average used for the time you need them to be powered on.
*A2*: or you need to look at all their specifications to see the peak and the "base" and based on those "predict" the needs.

**Q**: What is kWH and AH and kVA?
*A*:
 A is the current draw and kVA is thousands of Amps multiplied by the Voltage pulled/output (typically 220-240V)  and is nearly equivalent to W
W (Watts) is the power and calculated as Voltage * Amps(yes, it's the same but there are some details that differs outside of this discussion)
AH is the maximum amount of Amps that the battery can output (from 100% full to empty) for an hour. Ie. a 100Ah 12V battery, will be able to output 100A at 12V from 100% to "empty" for an hour... and then it's empty
kWh -> 1000Wh - The average Watts that was consumed during an hour
Efficiency: The percentage of power taken from the one side, that would be produced on the otherside, ie. 85% of 100Ah @ 12V  := 1200kWh * 0.85 => ~= 1020kWh producing ~4.6A at 240V  (Ditto for charging etc. from Solar/Grid to battery/etc.)

If you now wants to calculate the storage needed for a Stage2 - expecting 2 hours everyday:

1. get the expected Watts consumed (see https://zatech.slack.com/archives/CG4HBE0NB/p1669313627523599 ) for 1 hour
2. multiply the 1hour's value above by the number of hours you need to keep up, taking into account the overruns, and the expectations that charging might not be completed fully during  day.
3. Now you have two numbers: kVA - the output maximums you need to cater for (ie. how many computers on, compare this with the size of a water pipe) and  kWh  ie. the amount of storage needed compare with the size of the storage tank that feeds the pipe.
4. Those two numbers you can then take to installers/etc. to compare or calculate by adding the needed sizes of batteries, the UPS and the solar power needed to fill them batteries/storage tanks.
