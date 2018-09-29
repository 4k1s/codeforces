/*
 * codeforces.ru
 * problem: 231A - Team
 */

#include <stdio.h>

int main ()
{
/* initialize */
     unsigned short int n,c,flag=0,solution=0;
     char k1,k2,k3; 
/* read input */
     scanf("%hu\n", &n);
     for (c=0;c<n;c++,flag=0)
     {
	  scanf("%c %c %c\n", &k1,&k2,&k3);
	  if (k1=='1') 
	       flag++;
	  if (k2=='1') 
	       flag++;
	  if (k3=='1') 
	       flag++;
 
	  if (flag>1)	  
	       solution++;
     }
     printf("%hu\n",solution);
     return 0;
}   
