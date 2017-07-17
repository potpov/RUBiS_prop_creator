# RUBiS_prop_creator
a simple tool to create multiple rubis prop files for a range of experiments

# USE

just open the main.php file and set up the nb of experiments you want to do with the rubis client and the max value of clients you would reach.
then use: php main.php 
to generate all the rubis prop file you need for your range of experiments.
inside your rubis client directory you could use a bash script with a loop in order to replace iteratively all the rubis prop files generated with the rubis client prop file and then run the experiments.
