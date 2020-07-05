#include <stdio.h>
#include <stdlib.h>

int int_sort( const void * a , const void * b ) {
  /* 引数はvoid*型と規定されているのでint型にcastする */
  if( *( int * )a < *( int * )b ) {
    return -1;
  }
  else
  if( *( int * )a == *( int * )b ) {
    return 0;
  }
  return 1;
}

int main() {
    int N;
    int i, j;
    scanf("%d", &N);

    int A[N];
    for (i = 0; i < N; i++) {
        scanf("%d", &A[i]);
    }

    qsort(A, N, sizeof(A[0]), int_sort);

    int count = 0;
    for (i = 0; i < N; i++) {
        int flag = 1;
        for (j = 0; j < N && A[j] <= A[i]; j++) {
            if (i == j) continue;
            if (A[i] % A[j] == 0) {
                flag = 0;
                break;
            }
        }
        if (flag) count++;
    }

    printf("%d\n", count);
    return 0;
}
