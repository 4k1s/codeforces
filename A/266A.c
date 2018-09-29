/*
 * codeforces.ru
 * problem: 266A - Stones on the Table
 */

#include <stdio.h>

int main ()
{
/* initialize */
     unsigned short int n,c,solution=0;
     char k1,k2; 
/* read input */
     scanf("%hu\n",&n);
     char stones[n];
     if (n<2)
     {
	  printf("%hu\n",solution);
	  return 0;
     }
     scanf("%s", stones);
     for (c=0;c<n;c++)
     {
	  k1=stones[c];k2=stones[c+1];
	  if (k1==k2)
	       solution++;
     }
     printf("%hu\n",solution);
     return 0;
}   
