/*
 * codeforces.ru
 * problem: 96A - Team
 */

#include <stdio.h>
#include <string.h>

int main ()
{
/* initialize */
     unsigned short int len,c,sum,solution=0;
     char players[100];
/* read input */
     scanf("%s", players);
     len=strlen(players);

     if (len<7)
     {
	  solution=0;
     }
     else
     { 
	  for (c=0,sum=0;c<len-6;c++,sum=0)
	  {
	      
	       sum+=(players[c]+players[c+1]+players[c+2]+
		     players[c+3]+players[c+4]+players[c+5]+players[c+6])-48*7; 

	       if ((sum==7) || sum==0)
	       {
		    solution=1;
		    break;
	       }
	  
	  } /* end c loop */
     } /* end else */
     if (solution)
     {
	  printf("YES\n");
     }
     else
     {
	  printf("NO\n");
     }
     return 0;
}   
