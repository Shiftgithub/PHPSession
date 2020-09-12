#include<stdio.h>

int main()
{
    int data[8];

    for(int i =0; i<8; i++){
        switch(i){
            case 0:
            case 4:
                printf("Dia ");
                scanf("%d",&data[i]);
                break;
            case 3:
            case 7:
                scanf("%d",&data[i]);
                break;
            default :
                scanf("%d",&data[i]);
                printf(" : ");
                break;
        }
    }
    return 0;
}