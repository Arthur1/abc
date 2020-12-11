#include <bits/stdc++.h>
#include <unistd.h>
using namespace std;

int main()
{
    int n;
    cin >> n;
    vector<int> A(n + 1);
    for (int k = 1; k <= n; k++) {
        cin >> A.at(k);
    }
    vector<int> B(n + 1);
    vector<int> B1(0);

    for (int i = n; i > 0; i--) {
        int total = 0;
        for (int k = 2 * i; k <= n; k += i) {
            total += B.at(k);
        }
        if (total % 2 != A.at(i)) {
            B.at(i) = 1;
            B1.push_back(i);
        }
    }

    size_t size = B1.size();
    cout << size << endl;
    if (size == 0) return 0;
    for (size_t i = 0; i < size - 1; i++) {
        cout << B1.at(i) << " ";
    }
    cout << B1.at(size - 1) << endl;

    return 0;
}
