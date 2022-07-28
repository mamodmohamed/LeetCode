class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        if len(s)==len(t):
            s=''.join(sorted(s))
            t=''.join(sorted(t))
        if s==t:
            return True
        else:
            return False
