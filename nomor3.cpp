#include <iostream>
using namespace std;
int main()
{
int i,j,sisi;
char A[20][20];
cout<<"Masukkan Banyaknya Sisi = ";cin>>sisi;


if(sisi<20)
{
for(i=0;i<sisi;i++){
for(j=0;j<sisi;j++){
if((i==1)&&(j<sisi)||(i==j)||(i+j==sisi)&&(i<j))
{
A[i][j]='*';
}
else
{A[i][j]='  ';   }
cout<<A[i][j]<<"  "; }
cout<<endl<<endl;
}
}
}
