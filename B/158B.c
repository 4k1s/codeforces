
/*
 * codeforces.ru
 * problem: 158B - Taxi
 */

#include <stdio.h>

int main ()
{
/* initialize */
     unsigned int n, c,taxi=0;
     int category[4];
     for (c=0;c<4;c++)
     {
	  category[c]=0;
     }

/* read input */
     scanf("%u\n", &n);
     unsigned int group[n];

     for (c=0;c<n;c++)
     {
	  scanf("%u ",&group[c]);
     }
     for (c=0;c<n;c++)
     {
	  category[group[c]-1]++;  
     }

/* 4 ppl group */
     taxi+=category[3];
/* 3 ppl group */
     taxi+=category[2];
     category[0]-=category[2];
     if (category[0]<0)
	  category[0]=0;
/* 2 ppl group */
     if (category[1]%2)
	  category[0]+=2;
     
     taxi+=category[1]/2;
/* 1 ppl group */
     taxi+=category[0]/4;
     if (category[0]%4)
	  taxi++;
     
     printf("%u",taxi);
     return 0;
}   
