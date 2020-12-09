#include <bits/stdc++.h>
#include <unistd.h>
using namespace std;

int main()
{
    int N;
    cin >> N;
    vector<int> A(N);
    vector<int> left(N + 1), right(N + 1);
    for (int i = 0; i < N; i++) {
        cin >> A.at(i);
        if (i == 0) {
            left.at(i) = A.at(i);
        } else {
            left.at(i) = max(left.at(i - 1), A.at(i));
        }
    }

    for (int i = 0; i < N; i++) {
        if (i == 0) {
            right.at(i) = A.at(N - 1 - i);
        } else {
            right.at(i) = max(right.at(i - 1), A.at(N - 1 - i));
        }
    }

    for (int i = 0; i < N; i++) {
        if (i == 0) {
            cout << right.at(N - 2) << endl;
        } else if (i == N - 1) {
            cout << left.at(N - 2) << endl;
        } else {
            cout << max(left.at(i - 1), right.at(N - 1 - (i + 1))) << endl;
        }
    }
    return 0;
}
