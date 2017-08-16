<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

// eval(base64_decode("ICByZXF1aXJlKCdpbmNsdWRlcy9hcHBsaWNhdGlvbl90b3AucGhwJyk7CgovLyB0aGUgZm9sbG93aW5nIGNQYXRoIHJlZmVyZW5jZXMgY29tZSBmcm9tIGFwcGxpY2F0aW9uX3RvcC5waHAKICAkY2F0ZWdvcnlfZGVwdGggPSAndG9wJzsKICBpZiAoaXNzZXQoJGNQYXRoKSAmJiB0ZXBfbm90X251bGwoJGNQYXRoKSkgewogICAgJGNhdGVnb3JpZXNfcHJvZHVjdHNfcXVlcnkgPSB0ZXBfZGJfcXVlcnkoInNlbGVjdCBjb3VudCgqKSBhcyB0b3RhbCBmcm9tICIgLiBUQUJMRV9QUk9EVUNUU19UT19DQVRFR09SSUVTIC4gIiB3aGVyZSBjYXRlZ29yaWVzX2lkID0gJyIgLiAoaW50KSRjdXJyZW50X2NhdGVnb3J5X2lkIC4gIiciKTsKICAgICRjYXRlZ29yaWVzX3Byb2R1Y3RzID0gdGVwX2RiX2ZldGNoX2FycmF5KCRjYXRlZ29yaWVzX3Byb2R1Y3RzX3F1ZXJ5KTsKICAgIGlmICgkY2F0ZWdvcmllc19wcm9kdWN0c1sndG90YWwnXSA+IDApIHsKICAgICAgJGNhdGVnb3J5X2RlcHRoID0gJ3Byb2R1Y3RzJzsgLy8gZGlzcGxheSBwcm9kdWN0cwogICAgfSBlbHNlIHsKICAgICAgJGNhdGVnb3J5X3BhcmVudF9xdWVyeSA9IHRlcF9kYl9xdWVyeSgic2VsZWN0IGNvdW50KCopIGFzIHRvdGFsIGZyb20gIiAuIFRBQkxFX0NBVEVHT1JJRVMgLiAiIHdoZXJlIHBhcmVudF9pZCA9ICciIC4gKGludCkkY3VycmVudF9jYXRlZ29yeV9pZCAuICInIik7CiAgICAgICRjYXRlZ29yeV9wYXJlbnQgPSB0ZXBfZGJfZmV0Y2hfYXJyYXkoJGNhdGVnb3J5X3BhcmVudF9xdWVyeSk7CiAgICAgIGlmICgkY2F0ZWdvcnlfcGFyZW50Wyd0b3RhbCddID4gMCkgewogICAgICAgICRjYXRlZ29yeV9kZXB0aCA9ICduZXN0ZWQnOyAvLyBuYXZpZ2F0ZSB0aHJvdWdoIHRoZSBjYXRlZ29yaWVzCiAgICAgIH0gZWxzZSB7CiAgICAgICAgJGNhdGVnb3J5X2RlcHRoID0gJ3Byb2R1Y3RzJzsgLy8gY2F0ZWdvcnkgaGFzIG5vIHByb2R1Y3RzLCBidXQgZGlzcGxheSB0aGUgJ25vIHByb2R1Y3RzJyBtZXNzYWdlCiAgICAgIH0KICAgIH0KICB9CgogIHJlcXVpcmUoJ2luY2x1ZGVzL2xhbmd1YWdlcy8nIC4gJGxhbmd1YWdlIC4gJy9pbmRleC5waHAnKTsKCiAgcmVxdWlyZSgnaW5jbHVkZXMvdGVtcGxhdGVfdG9wLnBocCcpOwoKICBpZiAoJGNhdGVnb3J5X2RlcHRoID09ICduZXN0ZWQnKSB7Ci8vICAgICRjYXRlZ29yeV9xdWVyeSA9IHRlcF9kYl9xdWVyeSgic2VsZWN0IGNkLmNhdGVnb3JpZXNfbmFtZSwgYy5jYXRlZ29yaWVzX2ltYWdlLCBjZC5jYXRlZ29yaWVzX2Rlc2NyaXB0aW9uIGZyb20gIiAuIFRBQkxFX0NBVEVHT1JJRVMgLiAiIGMsICIgLiBUQUJMRV9DQVRFR09SSUVTX0RFU0NSSVBUSU9OIC4gIiBjZCB3aGVyZSBjLmNhdGVnb3JpZXNfaWQgPSAnIiAuIChpbnQpJGN1cnJlbnRfY2F0ZWdvcnlfaWQgLiAiJyBhbmQgY2QuY2F0ZWdvcmllc19pZCA9ICciIC4gKGludCkkY3VycmVudF9jYXRlZ29yeV9pZCAuICInIGFuZCBjZC5sYW5ndWFnZV9pZCA9ICciIC4gKGludCkkbGFuZ3VhZ2VzX2lkIC4gIiciKTsKICAgIC8qKiogQmVnaW4gSGVhZGVyIFRhZ3MgU0VPICoqKi8KICAgICRjYXRlZ29yeV9xdWVyeSA9IHRlcF9kYl9xdWVyeSgic2VsZWN0IGNkLmNhdGVnb3JpZXNfbmFtZSwgYy5jYXRlZ29yaWVzX2ltYWdlLCBJRihjZC5jYXRlZ29yaWVzX2h0Y190aXRsZV90YWdfYWx0ICE9ICcnLGNkLmNhdGVnb3JpZXNfaHRjX3RpdGxlX3RhZ19hbHQsY2QuY2F0ZWdvcmllc19odGNfdGl0bGVfdGFnKSBhcyBjYXRlZ29yaWVzX2h0Y190aXRsZV90YWcsIGNkLmNhdGVnb3JpZXNfaHRjX2Rlc2NyaXB0aW9uIGZyb20gIiAuIFRBQkxFX0NBVEVHT1JJRVMgLiAiIGMsICIgLiBUQUJMRV9DQVRFR09SSUVTX0RFU0NSSVBUSU9OIC4gIiBjZCB3aGVyZSBjLmNhdGVnb3JpZXNfaWQgPSAnIiAuIChpbnQpJGN1cnJlbnRfY2F0ZWdvcnlfaWQgLiAiJyBhbmQgY2QuY2F0ZWdvcmllc19pZCA9ICciIC4gKGludCkkY3VycmVudF9jYXRlZ29yeV9pZCAuICInIGFuZCBjZC5sYW5ndWFnZV9pZCA9ICciIC4gKGludCkkbGFuZ3VhZ2VzX2lkIC4gIiciKTsKICAgIC8qKiogZW5kIEhlYWRlciBUYWdzIFNFTyAqKiovCgogICAgJGNhdGVnb3J5ID0gdGVwX2RiX2ZldGNoX2FycmF5KCRjYXRlZ29yeV9xdWVyeSk7Cj8+Cgo8ZGl2IGNsYXNzPSJwYWdlLWhlYWRlciI+CiAgPGgxPjw/cGhwIGVjaG8gJGNhdGVnb3J5WydjYXRlZ29yaWVzX2h0Y190aXRsZV90YWcnXTsgPz48L2gxPgo8L2Rpdj4KCjw/cGhwCiAgaWYgKCRtZXNzYWdlU3RhY2stPnNpemUoJ3Byb2R1Y3RfYWN0aW9uJykgPiAwKSB7CiAgICBlY2hvICRtZXNzYWdlU3RhY2stPm91dHB1dCgncHJvZHVjdF9hY3Rpb24nKTsKICB9Cj8+Cgo8P3BocCAKLyoqKiBCZWdpbiBIZWFkZXIgVGFncyBTRU8gKioqLyAKaWYgKHRlcF9ub3RfbnVsbCgkY2F0ZWdvcnlbJ2NhdGVnb3JpZXNfaHRjX2Rlc2NyaXB0aW9uJ10pKSB7IAogICBlY2hvICc8ZGl2IGNsYXNzPSJ3ZWxsIHdlbGwtc20iPjxoMiBzdHlsZT0idGV4dC1kZWNvcmF0aW9uOm5vbmU7Ij4nIC4gJGNhdGVnb3J5WydjYXRlZ29yaWVzX2h0Y19kZXNjcmlwdGlvbiddIC4gJzwvaDI+PC9kaXY+JzsKfSAKLyoqKiBFbmQgSGVhZGVyIFRhZ3MgU0VPICoqKi8gCj8+CjxkaXYgY2xhc3M9ImNvbnRlbnRDb250YWluZXIiPgogIDxkaXYgY2xhc3M9InJvdyI+CiAgICA8P3BocCBlY2hvICRvc2NUZW1wbGF0ZS0+Z2V0Q29udGVudCgnaW5kZXhfbmVzdGVkJyk7ID8+CiAgPC9kaXY+CjwvZGl2PgoKPD9waHAKICB9IGVsc2VpZiAoJGNhdGVnb3J5X2RlcHRoID09ICdwcm9kdWN0cycgfHwgKGlzc2V0KCRfR0VUWydtYW51ZmFjdHVyZXJzX2lkJ10pICYmICFlbXB0eSgkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddKSkpIHsKLy8gY3JlYXRlIGNvbHVtbiBsaXN0CiAgICAkZGVmaW5lX2xpc3QgPSBhcnJheSgnUFJPRFVDVF9MSVNUX01PREVMJyA9PiBQUk9EVUNUX0xJU1RfTU9ERUwsCiAgICAgICAgICAgICAgICAgICAgICAgICAnUFJPRFVDVF9MSVNUX05BTUUnID0+IFBST0RVQ1RfTElTVF9OQU1FLAogICAgICAgICAgICAgICAgICAgICAgICAgJ1BST0RVQ1RfTElTVF9NQU5VRkFDVFVSRVInID0+IFBST0RVQ1RfTElTVF9NQU5VRkFDVFVSRVIsCiAgICAgICAgICAgICAgICAgICAgICAgICAnUFJPRFVDVF9MSVNUX1BSSUNFJyA9PiBQUk9EVUNUX0xJU1RfUFJJQ0UsCiAgICAgICAgICAgICAgICAgICAgICAgICAnUFJPRFVDVF9MSVNUX1FVQU5USVRZJyA9PiBQUk9EVUNUX0xJU1RfUVVBTlRJVFksCiAgICAgICAgICAgICAgICAgICAgICAgICAnUFJPRFVDVF9MSVNUX1dFSUdIVCcgPT4gUFJPRFVDVF9MSVNUX1dFSUdIVCwKICAgICAgICAgICAgICAgICAgICAgICAgICdQUk9EVUNUX0xJU1RfSU1BR0UnID0+IFBST0RVQ1RfTElTVF9JTUFHRSwKICAgICAgICAgICAgICAgICAgICAgICAgICdQUk9EVUNUX0xJU1RfQlVZX05PVycgPT4gUFJPRFVDVF9MSVNUX0JVWV9OT1cpOwoKICAgIGFzb3J0KCRkZWZpbmVfbGlzdCk7CgogICAgJGNvbHVtbl9saXN0ID0gYXJyYXkoKTsKICAgIHJlc2V0KCRkZWZpbmVfbGlzdCk7CiAgICB3aGlsZSAobGlzdCgka2V5LCAkdmFsdWUpID0gZWFjaCgkZGVmaW5lX2xpc3QpKSB7CiAgICAgIGlmICgkdmFsdWUgPiAwKSAkY29sdW1uX2xpc3RbXSA9ICRrZXk7CiAgICB9CgogICAgJHNlbGVjdF9jb2x1bW5fbGlzdCA9ICcnOwoKICAgIGZvciAoJGk9MCwgJG49c2l6ZW9mKCRjb2x1bW5fbGlzdCk7ICRpPCRuOyAkaSsrKSB7CiAgICAgIHN3aXRjaCAoJGNvbHVtbl9saXN0WyRpXSkgewogICAgICAgIGNhc2UgJ1BST0RVQ1RfTElTVF9NT0RFTCc6CiAgICAgICAgICAkc2VsZWN0X2NvbHVtbl9saXN0IC49ICdwLnByb2R1Y3RzX21vZGVsLCAnOwogICAgICAgICAgYnJlYWs7CiAgICAgICAgY2FzZSAnUFJPRFVDVF9MSVNUX05BTUUnOgogICAgICAgICAgJHNlbGVjdF9jb2x1bW5fbGlzdCAuPSAncGQucHJvZHVjdHNfbmFtZSwgJzsKICAgICAgICAgIGJyZWFrOwogICAgICAgIGNhc2UgJ1BST0RVQ1RfTElTVF9NQU5VRkFDVFVSRVInOgogICAgICAgICAgJHNlbGVjdF9jb2x1bW5fbGlzdCAuPSAnbS5tYW51ZmFjdHVyZXJzX25hbWUsICc7CiAgICAgICAgICBicmVhazsKICAgICAgICBjYXNlICdQUk9EVUNUX0xJU1RfUVVBTlRJVFknOgogICAgICAgICAgJHNlbGVjdF9jb2x1bW5fbGlzdCAuPSAncC5wcm9kdWN0c19xdWFudGl0eSwgJzsKICAgICAgICAgIGJyZWFrOwogICAgICAgIGNhc2UgJ1BST0RVQ1RfTElTVF9JTUFHRSc6CiAgICAgICAgICAkc2VsZWN0X2NvbHVtbl9saXN0IC49ICdwLnByb2R1Y3RzX2ltYWdlLCAnOwogICAgICAgICAgYnJlYWs7CiAgICAgICAgY2FzZSAnUFJPRFVDVF9MSVNUX1dFSUdIVCc6CiAgICAgICAgICAkc2VsZWN0X2NvbHVtbl9saXN0IC49ICdwLnByb2R1Y3RzX3dlaWdodCwgJzsKICAgICAgICAgIGJyZWFrOwogICAgICB9CiAgICB9CgovLyBzaG93IHRoZSBwcm9kdWN0cyBvZiBhIHNwZWNpZmllZCBtYW51ZmFjdHVyZXIKICAgIGlmIChpc3NldCgkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddKSAmJiAhZW1wdHkoJF9HRVRbJ21hbnVmYWN0dXJlcnNfaWQnXSkpIHsKICAgICAgaWYgKGlzc2V0KCRfR0VUWydmaWx0ZXJfaWQnXSkgJiYgdGVwX25vdF9udWxsKCRfR0VUWydmaWx0ZXJfaWQnXSkpIHsKLy8gV2UgYXJlIGFza2VkIHRvIHNob3cgb25seSBhIHNwZWNpZmljIGNhdGVnb3J5CiAgICAgICAgJGxpc3Rpbmdfc3FsID0gInNlbGVjdCAiIC4gJHNlbGVjdF9jb2x1bW5fbGlzdCAuICIgcC5wcm9kdWN0c19pZCwgU1VCU1RSSU5HX0lOREVYKHBkLnByb2R1Y3RzX2Rlc2NyaXB0aW9uLCAnICcsIDIwKSBhcyBwcm9kdWN0c19kZXNjcmlwdGlvbiwgcC5tYW51ZmFjdHVyZXJzX2lkLCBwLnByb2R1Y3RzX3ByaWNlLCBwLnByb2R1Y3RzX3RheF9jbGFzc19pZCwgSUYocy5zdGF0dXMsIHMuc3BlY2lhbHNfbmV3X3Byb2R1Y3RzX3ByaWNlLCBOVUxMKSBhcyBzcGVjaWFsc19uZXdfcHJvZHVjdHNfcHJpY2UsIElGKHMuc3RhdHVzLCBzLnNwZWNpYWxzX25ld19wcm9kdWN0c19wcmljZSwgcC5wcm9kdWN0c19wcmljZSkgYXMgZmluYWxfcHJpY2UgZnJvbSAiIC4gVEFCTEVfUFJPRFVDVFMgLiAiIHAgbGVmdCBqb2luICIgLiBUQUJMRV9TUEVDSUFMUyAuICIgcyBvbiBwLnByb2R1Y3RzX2lkID0gcy5wcm9kdWN0c19pZCwgIiAuIFRBQkxFX1BST0RVQ1RTX0RFU0NSSVBUSU9OIC4gIiBwZCwgIiAuIFRBQkxFX01BTlVGQUNUVVJFUlMgLiAiIG0sICIgLiBUQUJMRV9QUk9EVUNUU19UT19DQVRFR09SSUVTIC4gIiBwMmMgd2hlcmUgcC5wcm9kdWN0c19zdGF0dXMgPSAnMScgYW5kIHAubWFudWZhY3R1cmVyc19pZCA9IG0ubWFudWZhY3R1cmVyc19pZCBhbmQgbS5tYW51ZmFjdHVyZXJzX2lkID0gJyIgLiAoaW50KSRfR0VUWydtYW51ZmFjdHVyZXJzX2lkJ10gLiAiJyBhbmQgcC5wcm9kdWN0c19pZCA9IHAyYy5wcm9kdWN0c19pZCBhbmQgcGQucHJvZHVjdHNfaWQgPSBwMmMucHJvZHVjdHNfaWQgYW5kIHBkLmxhbmd1YWdlX2lkID0gJyIgLiAoaW50KSRsYW5ndWFnZXNfaWQgLiAiJyBhbmQgcDJjLmNhdGVnb3JpZXNfaWQgPSAnIiAuIChpbnQpJF9HRVRbJ2ZpbHRlcl9pZCddIC4gIiciOwogICAgICB9IGVsc2UgewovLyBXZSBzaG93IHRoZW0gYWxsCiAgICAgICAgJGxpc3Rpbmdfc3FsID0gInNlbGVjdCAiIC4gJHNlbGVjdF9jb2x1bW5fbGlzdCAuICIgcC5wcm9kdWN0c19pZCwgU1VCU1RSSU5HX0lOREVYKHBkLnByb2R1Y3RzX2Rlc2NyaXB0aW9uLCAnICcsIDIwKSBhcyBwcm9kdWN0c19kZXNjcmlwdGlvbiwgcC5tYW51ZmFjdHVyZXJzX2lkLCBwLnByb2R1Y3RzX3ByaWNlLCBwLnByb2R1Y3RzX3RheF9jbGFzc19pZCwgSUYocy5zdGF0dXMsIHMuc3BlY2lhbHNfbmV3X3Byb2R1Y3RzX3ByaWNlLCBOVUxMKSBhcyBzcGVjaWFsc19uZXdfcHJvZHVjdHNfcHJpY2UsIElGKHMuc3RhdHVzLCBzLnNwZWNpYWxzX25ld19wcm9kdWN0c19wcmljZSwgcC5wcm9kdWN0c19wcmljZSkgYXMgZmluYWxfcHJpY2UgZnJvbSAiIC4gVEFCTEVfUFJPRFVDVFMgLiAiIHAgbGVmdCBqb2luICIgLiBUQUJMRV9TUEVDSUFMUyAuICIgcyBvbiBwLnByb2R1Y3RzX2lkID0gcy5wcm9kdWN0c19pZCwgIiAuIFRBQkxFX1BST0RVQ1RTX0RFU0NSSVBUSU9OIC4gIiBwZCwgIiAuIFRBQkxFX01BTlVGQUNUVVJFUlMgLiAiIG0gd2hlcmUgcC5wcm9kdWN0c19zdGF0dXMgPSAnMScgYW5kIHBkLnByb2R1Y3RzX2lkID0gcC5wcm9kdWN0c19pZCBhbmQgcGQubGFuZ3VhZ2VfaWQgPSAnIiAuIChpbnQpJGxhbmd1YWdlc19pZCAuICInIGFuZCBwLm1hbnVmYWN0dXJlcnNfaWQgPSBtLm1hbnVmYWN0dXJlcnNfaWQgYW5kIG0ubWFudWZhY3R1cmVyc19pZCA9ICciIC4gKGludCkkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddIC4gIiciOwogICAgICB9CiAgICB9IGVsc2UgewovLyBzaG93IHRoZSBwcm9kdWN0cyBpbiBhIGdpdmVuIGNhdGVnb3JpZQogICAgICBpZiAoaXNzZXQoJF9HRVRbJ2ZpbHRlcl9pZCddKSAmJiB0ZXBfbm90X251bGwoJF9HRVRbJ2ZpbHRlcl9pZCddKSkgewovLyBXZSBhcmUgYXNrZWQgdG8gc2hvdyBvbmx5IHNwZWNpZmljIGNhdGdlb3J5CiAgICAgICAgJGxpc3Rpbmdfc3FsID0gInNlbGVjdCAiIC4gJHNlbGVjdF9jb2x1bW5fbGlzdCAuICIgcC5wcm9kdWN0c19pZCwgU1VCU1RSSU5HX0lOREVYKHBkLnByb2R1Y3RzX2Rlc2NyaXB0aW9uLCAnICcsIDIwKSBhcyBwcm9kdWN0c19kZXNjcmlwdGlvbiwgcC5tYW51ZmFjdHVyZXJzX2lkLCBwLnByb2R1Y3RzX3ByaWNlLCBwLnByb2R1Y3RzX3RheF9jbGFzc19pZCwgSUYocy5zdGF0dXMsIHMuc3BlY2lhbHNfbmV3X3Byb2R1Y3RzX3ByaWNlLCBOVUxMKSBhcyBzcGVjaWFsc19uZXdfcHJvZHVjdHNfcHJpY2UsIElGKHMuc3RhdHVzLCBzLnNwZWNpYWxzX25ld19wcm9kdWN0c19wcmljZSwgcC5wcm9kdWN0c19wcmljZSkgYXMgZmluYWxfcHJpY2UgZnJvbSAiIC4gVEFCTEVfUFJPRFVDVFMgLiAiIHAgbGVmdCBqb2luICIgLiBUQUJMRV9TUEVDSUFMUyAuICIgcyBvbiBwLnByb2R1Y3RzX2lkID0gcy5wcm9kdWN0c19pZCwgIiAuIFRBQkxFX1BST0RVQ1RTX0RFU0NSSVBUSU9OIC4gIiBwZCwgIiAuIFRBQkxFX01BTlVGQUNUVVJFUlMgLiAiIG0sICIgLiBUQUJMRV9QUk9EVUNUU19UT19DQVRFR09SSUVTIC4gIiBwMmMgd2hlcmUgcC5wcm9kdWN0c19zdGF0dXMgPSAnMScgYW5kIHAubWFudWZhY3R1cmVyc19pZCA9IG0ubWFudWZhY3R1cmVyc19pZCBhbmQgbS5tYW51ZmFjdHVyZXJzX2lkID0gJyIgLiAoaW50KSRfR0VUWydmaWx0ZXJfaWQnXSAuICInIGFuZCBwLnByb2R1Y3RzX2lkID0gcDJjLnByb2R1Y3RzX2lkIGFuZCBwZC5wcm9kdWN0c19pZCA9IHAyYy5wcm9kdWN0c19pZCBhbmQgcGQubGFuZ3VhZ2VfaWQgPSAnIiAuIChpbnQpJGxhbmd1YWdlc19pZCAuICInIGFuZCBwMmMuY2F0ZWdvcmllc19pZCA9ICciIC4gKGludCkkY3VycmVudF9jYXRlZ29yeV9pZCAuICInIjsKICAgICAgfSBlbHNlIHsKLy8gV2Ugc2hvdyB0aGVtIGFsbAogICAgICAgICRsaXN0aW5nX3NxbCA9ICJzZWxlY3QgIiAuICRzZWxlY3RfY29sdW1uX2xpc3QgLiAiIHAucHJvZHVjdHNfaWQsIFNVQlNUUklOR19JTkRFWChwZC5wcm9kdWN0c19kZXNjcmlwdGlvbiwgJyAnLCAyMCkgYXMgcHJvZHVjdHNfZGVzY3JpcHRpb24sIHAubWFudWZhY3R1cmVyc19pZCwgcC5wcm9kdWN0c19wcmljZSwgcC5wcm9kdWN0c190YXhfY2xhc3NfaWQsIElGKHMuc3RhdHVzLCBzLnNwZWNpYWxzX25ld19wcm9kdWN0c19wcmljZSwgTlVMTCkgYXMgc3BlY2lhbHNfbmV3X3Byb2R1Y3RzX3ByaWNlLCBJRihzLnN0YXR1cywgcy5zcGVjaWFsc19uZXdfcHJvZHVjdHNfcHJpY2UsIHAucHJvZHVjdHNfcHJpY2UpIGFzIGZpbmFsX3ByaWNlIGZyb20gIiAuIFRBQkxFX1BST0RVQ1RTX0RFU0NSSVBUSU9OIC4gIiBwZCwgIiAuIFRBQkxFX1BST0RVQ1RTIC4gIiBwIGxlZnQgam9pbiAiIC4gVEFCTEVfTUFOVUZBQ1RVUkVSUyAuICIgbSBvbiBwLm1hbnVmYWN0dXJlcnNfaWQgPSBtLm1hbnVmYWN0dXJlcnNfaWQgbGVmdCBqb2luICIgLiBUQUJMRV9TUEVDSUFMUyAuICIgcyBvbiBwLnByb2R1Y3RzX2lkID0gcy5wcm9kdWN0c19pZCwgIiAuIFRBQkxFX1BST0RVQ1RTX1RPX0NBVEVHT1JJRVMgLiAiIHAyYyB3aGVyZSBwLnByb2R1Y3RzX3N0YXR1cyA9ICcxJyBhbmQgcC5wcm9kdWN0c19pZCA9IHAyYy5wcm9kdWN0c19pZCBhbmQgcGQucHJvZHVjdHNfaWQgPSBwMmMucHJvZHVjdHNfaWQgYW5kIHBkLmxhbmd1YWdlX2lkID0gJyIgLiAoaW50KSRsYW5ndWFnZXNfaWQgLiAiJyBhbmQgcDJjLmNhdGVnb3JpZXNfaWQgPSAnIiAuIChpbnQpJGN1cnJlbnRfY2F0ZWdvcnlfaWQgLiAiJyI7CiAgICAgIH0KICAgIH0KCiAgICBpZiAoICghaXNzZXQoJF9HRVRbJ3NvcnQnXSkpIHx8ICghcHJlZ19tYXRjaCgnL15bMS04XVthZF0kLycsICRfR0VUWydzb3J0J10pKSB8fCAoc3Vic3RyKCRfR0VUWydzb3J0J10sIDAsIDEpID4gc2l6ZW9mKCRjb2x1bW5fbGlzdCkpICkgewogICAgICBmb3IgKCRpPTAsICRuPXNpemVvZigkY29sdW1uX2xpc3QpOyAkaTwkbjsgJGkrKykgewogICAgICAgIGlmICgkY29sdW1uX2xpc3RbJGldID09ICdQUk9EVUNUX0xJU1RfTkFNRScpIHsKICAgICAgICAgICRfR0VUWydzb3J0J10gPSAkaSsxIC4gJ2EnOwogICAgICAgICAgJGxpc3Rpbmdfc3FsIC49ICIgb3JkZXIgYnkgcGQucHJvZHVjdHNfbmFtZSI7CiAgICAgICAgICBicmVhazsKICAgICAgICB9CiAgICAgIH0KICAgIH0gZWxzZSB7CiAgICAgICRzb3J0X2NvbCA9IHN1YnN0cigkX0dFVFsnc29ydCddLCAwICwgMSk7CiAgICAgICRzb3J0X29yZGVyID0gc3Vic3RyKCRfR0VUWydzb3J0J10sIDEpOwoKICAgICAgc3dpdGNoICgkY29sdW1uX2xpc3RbJHNvcnRfY29sLTFdKSB7CiAgICAgICAgY2FzZSAnUFJPRFVDVF9MSVNUX01PREVMJzoKICAgICAgICAgICRsaXN0aW5nX3NxbCAuPSAiIG9yZGVyIGJ5IHAucHJvZHVjdHNfbW9kZWwgIiAuICgkc29ydF9vcmRlciA9PSAnZCcgPyAnZGVzYycgOiAnJykgLiAiLCBwZC5wcm9kdWN0c19uYW1lIjsKICAgICAgICAgIGJyZWFrOwogICAgICAgIGNhc2UgJ1BST0RVQ1RfTElTVF9OQU1FJzoKICAgICAgICAgICRsaXN0aW5nX3NxbCAuPSAiIG9yZGVyIGJ5IHBkLnByb2R1Y3RzX25hbWUgIiAuICgkc29ydF9vcmRlciA9PSAnZCcgPyAnZGVzYycgOiAnJyk7CiAgICAgICAgICBicmVhazsKICAgICAgICBjYXNlICdQUk9EVUNUX0xJU1RfTUFOVUZBQ1RVUkVSJzoKICAgICAgICAgICRsaXN0aW5nX3NxbCAuPSAiIG9yZGVyIGJ5IG0ubWFudWZhY3R1cmVyc19uYW1lICIgLiAoJHNvcnRfb3JkZXIgPT0gJ2QnID8gJ2Rlc2MnIDogJycpIC4gIiwgcGQucHJvZHVjdHNfbmFtZSI7CiAgICAgICAgICBicmVhazsKICAgICAgICBjYXNlICdQUk9EVUNUX0xJU1RfUVVBTlRJVFknOgogICAgICAgICAgJGxpc3Rpbmdfc3FsIC49ICIgb3JkZXIgYnkgcC5wcm9kdWN0c19xdWFudGl0eSAiIC4gKCRzb3J0X29yZGVyID09ICdkJyA/ICdkZXNjJyA6ICcnKSAuICIsIHBkLnByb2R1Y3RzX25hbWUiOwogICAgICAgICAgYnJlYWs7CiAgICAgICAgY2FzZSAnUFJPRFVDVF9MSVNUX0lNQUdFJzoKICAgICAgICAgICRsaXN0aW5nX3NxbCAuPSAiIG9yZGVyIGJ5IHBkLnByb2R1Y3RzX25hbWUiOwogICAgICAgICAgYnJlYWs7CiAgICAgICAgY2FzZSAnUFJPRFVDVF9MSVNUX1dFSUdIVCc6CiAgICAgICAgICAkbGlzdGluZ19zcWwgLj0gIiBvcmRlciBieSBwLnByb2R1Y3RzX3dlaWdodCAiIC4gKCRzb3J0X29yZGVyID09ICdkJyA/ICdkZXNjJyA6ICcnKSAuICIsIHBkLnByb2R1Y3RzX25hbWUiOwogICAgICAgICAgYnJlYWs7CiAgICAgICAgY2FzZSAnUFJPRFVDVF9MSVNUX1BSSUNFJzoKICAgICAgICAgICRsaXN0aW5nX3NxbCAuPSAiIG9yZGVyIGJ5IGZpbmFsX3ByaWNlICIgLiAoJHNvcnRfb3JkZXIgPT0gJ2QnID8gJ2Rlc2MnIDogJycpIC4gIiwgcGQucHJvZHVjdHNfbmFtZSI7CiAgICAgICAgICBicmVhazsKICAgICAgfQogICAgfQogICAgLyoqKiBCZWdpbiBIZWFkZXIgVGFncyBTRU8gKioqLwogICAgaWYgKGlzc2V0KCRfR0VUWydtYW51ZmFjdHVyZXJzX2lkJ10pICYmICFlbXB0eSgkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddKSkgewogICAgICAkaW1hZ2UgPSB0ZXBfZGJfcXVlcnkoInNlbGVjdCBtLm1hbnVmYWN0dXJlcnNfaW1hZ2UsIG0ubWFudWZhY3R1cmVyc19uYW1lIGFzIGNhdG5hbWUsIG1pLm1hbnVmYWN0dXJlcnNfZGVzY3JpcHRpb24gYXMgY2F0ZGVzYyBmcm9tIG1hbnVmYWN0dXJlcnMgbSwgbWFudWZhY3R1cmVyc19pbmZvIG1pIHdoZXJlIG0ubWFudWZhY3R1cmVyc19pZCA9ICciIC4gKGludCkkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddIC4gIicgYW5kIG0ubWFudWZhY3R1cmVyc19pZCA9IG1pLm1hbnVmYWN0dXJlcnNfaWQgYW5kIG1pLmxhbmd1YWdlc19pZCA9ICciIC4gKGludCkkbGFuZ3VhZ2VzX2lkIC4gIiciKTsKICAgICAgJGltYWdlID0gdGVwX2RiX2ZldGNoX2FycmF5KCRpbWFnZSk7CiAgICAgICRkYl9xdWVyeSA9IHRlcF9kYl9xdWVyeSgic2VsZWN0IElGKG1hbnVmYWN0dXJlcnNfaHRjX3RpdGxlX3RhZ19hbHQgIT0gJycsbWFudWZhY3R1cmVyc19odGNfdGl0bGVfdGFnX2FsdCwgbWFudWZhY3R1cmVyc19odGNfdGl0bGVfdGFnKSBhcyBodGNfdGl0bGUsIG1hbnVmYWN0dXJlcnNfaHRjX2Rlc2NyaXB0aW9uIGFzIGh0Y19kZXNjcmlwdGlvbiBmcm9tICIgLiBUQUJMRV9NQU5VRkFDVFVSRVJTX0lORk8gLiAiIHdoZXJlIGxhbmd1YWdlc19pZCA9ICciIC4gKGludCkkbGFuZ3VhZ2VzX2lkIC4gIicgYW5kIG1hbnVmYWN0dXJlcnNfaWQgPSAnIiAuIChpbnQpJEhUVFBfR0VUX1ZBUlNbJ21hbnVmYWN0dXJlcnNfaWQnXSAuICInIik7CiAgICB9IGVsc2VpZiAoJGN1cnJlbnRfY2F0ZWdvcnlfaWQpIHsKICAgICAgJGltYWdlID0gdGVwX2RiX3F1ZXJ5KCJzZWxlY3QgYy5jYXRlZ29yaWVzX2ltYWdlLCBjZC5jYXRlZ29yaWVzX25hbWUgYXMgY2F0bmFtZSwgY2QuY2F0ZWdvcmllc19kZXNjcmlwdGlvbiBhcyBjYXRkZXNjIGZyb20gIiAuIFRBQkxFX0NBVEVHT1JJRVMgLiAiIGMsICIgLiBUQUJMRV9DQVRFR09SSUVTX0RFU0NSSVBUSU9OIC4gIiBjZCB3aGVyZSBjLmNhdGVnb3JpZXNfaWQgPSAnIiAuIChpbnQpJGN1cnJlbnRfY2F0ZWdvcnlfaWQgLiAiJyBhbmQgYy5jYXRlZ29yaWVzX2lkID0gY2QuY2F0ZWdvcmllc19pZCBhbmQgY2QubGFuZ3VhZ2VfaWQgPSAnIiAuIChpbnQpJGxhbmd1YWdlc19pZCAuICInIik7CiAgICAgICRpbWFnZSA9IHRlcF9kYl9mZXRjaF9hcnJheSgkaW1hZ2UpOwogICAgICAkZGJfcXVlcnkgPSB0ZXBfZGJfcXVlcnkoInNlbGVjdCBJRihjYXRlZ29yaWVzX2h0Y190aXRsZV90YWdfYWx0ICE9ICcnLGNhdGVnb3JpZXNfaHRjX3RpdGxlX3RhZ19hbHQsIGNhdGVnb3JpZXNfaHRjX3RpdGxlX3RhZykgYXMgaHRjX3RpdGxlLCBjYXRlZ29yaWVzX2h0Y19kZXNjcmlwdGlvbiBhcyBodGNfZGVzY3JpcHRpb24gZnJvbSAiIC4gVEFCTEVfQ0FURUdPUklFU19ERVNDUklQVElPTiAuICIgd2hlcmUgY2F0ZWdvcmllc19pZCA9ICciIC4gKGludCkkY3VycmVudF9jYXRlZ29yeV9pZCAuICInIGFuZCBsYW5ndWFnZV9pZCA9ICciIC4gKGludCkkbGFuZ3VhZ2VzX2lkIC4gIiciKTsKICAgIH0KICAgICRodGMgPSB0ZXBfZGJfZmV0Y2hfYXJyYXkoJGRiX3F1ZXJ5KTsKPz4KPGRpdiBjbGFzcz0icGFnZS1oZWFkZXIiPgogIDxoMT48P3BocCBlY2hvICRodGNbJ2h0Y190aXRsZSddOyA/PjwvaDE+CjwvZGl2PgogICAgPD9waHAgLyoqKiBFbmQgSGVhZGVyIFRhZ3MgU0VPICoqKi8gPz4KPGRpdiBjbGFzcz0iY29udGVudENvbnRhaW5lciI+Cjw/cGhwCi8vIG9wdGlvbmFsIFByb2R1Y3QgTGlzdCBGaWx0ZXIKICAgIGlmIChQUk9EVUNUX0xJU1RfRklMVEVSID4gMCkgewogICAgICBpZiAoaXNzZXQoJF9HRVRbJ21hbnVmYWN0dXJlcnNfaWQnXSkgJiYgIWVtcHR5KCRfR0VUWydtYW51ZmFjdHVyZXJzX2lkJ10pKSB7CiAgICAgICAgJGZpbHRlcmxpc3Rfc3FsID0gInNlbGVjdCBkaXN0aW5jdCBjLmNhdGVnb3JpZXNfaWQgYXMgaWQsIGNkLmNhdGVnb3JpZXNfbmFtZSBhcyBuYW1lIGZyb20gIiAuIFRBQkxFX1BST0RVQ1RTIC4gIiBwLCAiIC4gVEFCTEVfUFJPRFVDVFNfVE9fQ0FURUdPUklFUyAuICIgcDJjLCAiIC4gVEFCTEVfQ0FURUdPUklFUyAuICIgYywgIiAuIFRBQkxFX0NBVEVHT1JJRVNfREVTQ1JJUFRJT04gLiAiIGNkIHdoZXJlIHAucHJvZHVjdHNfc3RhdHVzID0gJzEnIGFuZCBwLnByb2R1Y3RzX2lkID0gcDJjLnByb2R1Y3RzX2lkIGFuZCBwMmMuY2F0ZWdvcmllc19pZCA9IGMuY2F0ZWdvcmllc19pZCBhbmQgcDJjLmNhdGVnb3JpZXNfaWQgPSBjZC5jYXRlZ29yaWVzX2lkIGFuZCBjZC5sYW5ndWFnZV9pZCA9ICciIC4gKGludCkkbGFuZ3VhZ2VzX2lkIC4gIicgYW5kIHAubWFudWZhY3R1cmVyc19pZCA9ICciIC4gKGludCkkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddIC4gIicgb3JkZXIgYnkgY2QuY2F0ZWdvcmllc19uYW1lIjsKICAgICAgfSBlbHNlIHsKICAgICAgICAkZmlsdGVybGlzdF9zcWw9ICJzZWxlY3QgZGlzdGluY3QgbS5tYW51ZmFjdHVyZXJzX2lkIGFzIGlkLCBtLm1hbnVmYWN0dXJlcnNfbmFtZSBhcyBuYW1lIGZyb20gIiAuIFRBQkxFX1BST0RVQ1RTIC4gIiBwLCAiIC4gVEFCTEVfUFJPRFVDVFNfVE9fQ0FURUdPUklFUyAuICIgcDJjLCAiIC4gVEFCTEVfTUFOVUZBQ1RVUkVSUyAuICIgbSB3aGVyZSBwLnByb2R1Y3RzX3N0YXR1cyA9ICcxJyBhbmQgcC5tYW51ZmFjdHVyZXJzX2lkID0gbS5tYW51ZmFjdHVyZXJzX2lkIGFuZCBwLnByb2R1Y3RzX2lkID0gcDJjLnByb2R1Y3RzX2lkIGFuZCBwMmMuY2F0ZWdvcmllc19pZCA9ICciIC4gKGludCkkY3VycmVudF9jYXRlZ29yeV9pZCAuICInIG9yZGVyIGJ5IG0ubWFudWZhY3R1cmVyc19uYW1lIjsKICAgICAgfQogICAgICAkZmlsdGVybGlzdF9xdWVyeSA9IHRlcF9kYl9xdWVyeSgkZmlsdGVybGlzdF9zcWwpOwogICAgICBpZiAodGVwX2RiX251bV9yb3dzKCRmaWx0ZXJsaXN0X3F1ZXJ5KSA+IDEpIHsKICAgICAgICBlY2hvICc8ZGl2PicgLiB0ZXBfZHJhd19mb3JtKCdmaWx0ZXInLCAnaW5kZXgucGhwJywgJ2dldCcpIC4gJzxwIGFsaWduPSJyaWdodCI+JyAuIFRFWFRfU0hPVyAuICcmbmJzcDsnOwogICAgICAgIGlmIChpc3NldCgkX0dFVFsnbWFudWZhY3R1cmVyc19pZCddKSAmJiAhZW1wdHkoJF9HRVRbJ21hbnVmYWN0dXJlcnNfaWQnXSkpIHsKICAgICAgICAgIGVjaG8gdGVwX2RyYXdfaGlkZGVuX2ZpZWxkKCdtYW51ZmFjdHVyZXJzX2lkJywgJF9HRVRbJ21hbnVmYWN0dXJlcnNfaWQnXSk7CiAgICAgICAgICAkb3B0aW9ucyA9IGFycmF5KGFycmF5KCdpZCcgPT4gJycsICd0ZXh0JyA9PiBURVhUX0FMTF9DQVRFR09SSUVTKSk7CiAgICAgICAgfSBlbHNlIHsKICAgICAgICAgIGVjaG8gdGVwX2RyYXdfaGlkZGVuX2ZpZWxkKCdjUGF0aCcsICRjUGF0aCk7CiAgICAgICAgICAkb3B0aW9ucyA9IGFycmF5KGFycmF5KCdpZCcgPT4gJycsICd0ZXh0JyA9PiBURVhUX0FMTF9NQU5VRkFDVFVSRVJTKSk7CiAgICAgICAgfQogICAgICAgIGVjaG8gdGVwX2RyYXdfaGlkZGVuX2ZpZWxkKCdzb3J0JywgJF9HRVRbJ3NvcnQnXSk7CiAgICAgICAgd2hpbGUgKCRmaWx0ZXJsaXN0ID0gdGVwX2RiX2ZldGNoX2FycmF5KCRmaWx0ZXJsaXN0X3F1ZXJ5KSkgewogICAgICAgICAgJG9wdGlvbnNbXSA9IGFycmF5KCdpZCcgPT4gJGZpbHRlcmxpc3RbJ2lkJ10sICd0ZXh0JyA9PiAkZmlsdGVybGlzdFsnbmFtZSddKTsKICAgICAgICB9CiAgICAgICAgZWNobyB0ZXBfZHJhd19wdWxsX2Rvd25fbWVudSgnZmlsdGVyX2lkJywgJG9wdGlvbnMsIChpc3NldCgkX0dFVFsnZmlsdGVyX2lkJ10pID8gJF9HRVRbJ2ZpbHRlcl9pZCddIDogJycpLCAnb25jaGFuZ2U9InRoaXMuZm9ybS5zdWJtaXQoKSInKTsKICAgICAgICBlY2hvIHRlcF9oaWRlX3Nlc3Npb25faWQoKSAuICc8L3A+PC9mb3JtPjwvZGl2PicgLiAiXG4iOwogICAgICB9CiAgICB9CgogICAgLyoqKiBCZWdpbiBIZWFkZXIgVGFncyBTRU8gKioqLyAKICAgIGlmICh0ZXBfbm90X251bGwoJGh0Y1snaHRjX2Rlc2NyaXB0aW9uJ10pKSB7IAogICAgICAgICBlY2hvICc8aDIgc3R5bGU9InRleHQtZGVjb3JhdGlvbjpub25lOyI+Jy4gJGh0Y1snaHRjX2Rlc2NyaXB0aW9uJ10gLiAnPC9oMj4nOwogICAgIH0KICAgIC8qKiogRW5kIEhlYWRlciBUYWdzIFNFTyAqKiovIAogICAgaW5jbHVkZSgnaW5jbHVkZXMvbW9kdWxlcy9wcm9kdWN0X2xpc3RpbmcucGhwJyk7Cj8+Cgo8L2Rpdj4KICAgIDwhLS0tIEJFR0lOIEhlYWRlciBUYWdzIFNFTyBTb2NpYWwgQm9va21hcmtzIC0tPgogICAgPD9waHAgaWYgKEhFQURFUl9UQUdTX0RJU1BMQVlfU09DSUFMX0JPT0tNQVJLUyA9PSAndHJ1ZScpIHsKICAgICAgZWNobyAnPGRpdiBzdHlsZT0ibWFyZ2luLXRvcDo1cHg7IGZsb2F0OnJpZ2h0OyI+JzsKICAgICAgaW5jbHVkZSgnaW5jbHVkZXMvbW9kdWxlcy9oZWFkZXJfdGFnc19zb2NpYWxfYm9va21hcmtzLnBocCcpOwogICAgICBlY2hvICc8L2Rpdj4nOyAgICB9CiAgICA/PgogICAgPCEtLS0gRU5EIEhlYWRlciBUYWdzIFNFTyBTb2NpYWwgQm9va21hcmtzIC0tPgoKPD9waHAKICB9IGVsc2UgeyAvLyBkZWZhdWx0IHBhZ2UKPz4KCjxkaXYgY2xhc3M9InBhZ2UtaGVhZGVyIj4KICA8aDE+PD9waHAgZWNobyBIRUFESU5HX1RJVExFOyA/PjwvaDE+CjwvZGl2PgoKPD9waHAKICBpZiAoJG1lc3NhZ2VTdGFjay0+c2l6ZSgncHJvZHVjdF9hY3Rpb24nKSA+IDApIHsKICAgIGVjaG8gJG1lc3NhZ2VTdGFjay0+b3V0cHV0KCdwcm9kdWN0X2FjdGlvbicpOwogIH0KPz4KCjxkaXYgY2xhc3M9InJvdyI+CiAgPD9waHAgZWNobyAkb3NjVGVtcGxhdGUtPmdldENvbnRlbnQoJ2luZGV4Jyk7ID8+CjwvZGl2PgoKPD9waHAKICAgIAogICAgLy88IS0tLSBCZWdpbiBIZWFkZXIgVGFncyBTRU8gSG9tZSBQYWdlIFRleHQgYW5kIFNvY2lhbCBCb29rbWFya3MgLS0+CiAgICBpZiAodGVwX25vdF9udWxsKCRoZWFkZXJfdGFnc19hcnJheVsnaG9tZV9wYWdlX3RleHQnXSkpIHsKICAgICAgICBlY2hvICc8ZGl2Pic7CiAgICAgICAgZWNobyAnPGRpdiBzdHlsZT0icGFkZGluZzoxMHB4IDA7Ij4nIC4gJGhlYWRlcl90YWdzX2FycmF5Wydob21lX3BhZ2VfdGV4dCddIC4gJzwvZGl2Pic7CiAgICAgICAgZWNobyAnPC9kaXY+JzsKICAgIH0KCiAgICBpZiAoSEVBREVSX1RBR1NfRElTUExBWV9TT0NJQUxfQk9PS01BUktTID09ICd0cnVlJykgewogICAgICAgIGVjaG8gJzxkaXY+JzsKICAgICAgICBpbmNsdWRlKCdpbmNsdWRlcy9tb2R1bGVzL2hlYWRlcl90YWdzX3NvY2lhbF9ib29rbWFya3MucGhwJyk7IAogICAgICAgIGVjaG8gJzwvZGl2Pic7CiAgICB9CiAgICAvLzwhLS0tIEVORCBIZWFkZXIgVGFncyBTRU8gSG9tZSBQYWdlIFRleHQgYW5kIFNvY2lhbCBCb29rbWFya3MgLS0+CiAgICA/PgoKPD9waHAKICB9CgogIHJlcXVpcmUoJ2luY2x1ZGVzL3RlbXBsYXRlX2JvdHRvbS5waHAnKTsKICByZXF1aXJlKCdpbmNsdWRlcy9hcHBsaWNhdGlvbl9ib3R0b20ucGhwJyk7"));

  require('includes/application_top.php');

// the following cPath references come from application_top.php
  $category_depth = 'top';
  if (isset($cPath) && tep_not_null($cPath)) {
    $categories_products_query = tep_db_query("select count(*) as total from " . TABLE_PRODUCTS_TO_CATEGORIES . " where categories_id = '" . (int)$current_category_id . "'");
    $categories_products = tep_db_fetch_array($categories_products_query);
    if ($categories_products['total'] > 0) {
      $category_depth = 'products'; // display products
    } else {
      $category_parent_query = tep_db_query("select count(*) as total from " . TABLE_CATEGORIES . " where parent_id = '" . (int)$current_category_id . "'");
      $category_parent = tep_db_fetch_array($category_parent_query);
      if ($category_parent['total'] > 0) {
        $category_depth = 'nested'; // navigate through the categories
      } else {
        $category_depth = 'products'; // category has no products, but display the 'no products' message
      }
    }
  }

  require('includes/languages/' . $language . '/index.php');

  require('includes/template_top.php');

  if ($category_depth == 'nested') {
//    $category_query = tep_db_query("select cd.categories_name, c.categories_image, cd.categories_description from " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd where c.categories_id = '" . (int)$current_category_id . "' and cd.categories_id = '" . (int)$current_category_id . "' and cd.language_id = '" . (int)$languages_id . "'");
    /*** Begin Header Tags SEO ***/
    $category_query = tep_db_query("select cd.categories_name, c.categories_image, IF(cd.categories_htc_title_tag_alt != '',cd.categories_htc_title_tag_alt,cd.categories_htc_title_tag) as categories_htc_title_tag, cd.categories_htc_description from " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd where c.categories_id = '" . (int)$current_category_id . "' and cd.categories_id = '" . (int)$current_category_id . "' and cd.language_id = '" . (int)$languages_id . "'");
    /*** end Header Tags SEO ***/

    $category = tep_db_fetch_array($category_query);
?>

<div class="page-header">
  <h1><?php echo $category['categories_htc_title_tag']; ?></h1>
</div>

<?php
  if ($messageStack->size('product_action') > 0) {
    echo $messageStack->output('product_action');
  }
?>

<?php 
/*** Begin Header Tags SEO ***/ 
if (tep_not_null($category['categories_htc_description'])) { 
   echo '<div class="well well-sm"><h2 style="text-decoration:none;">' . $category['categories_htc_description'] . '</h2></div>';
} 
/*** End Header Tags SEO ***/ 
?>
<div class="contentContainer">
  <div class="row">
    <?php echo $oscTemplate->getContent('index_nested'); ?>
  </div>
</div>

<?php
  } elseif ($category_depth == 'products' || (isset($_GET['manufacturers_id']) && !empty($_GET['manufacturers_id']))) {
// create column list
    $define_list = array('PRODUCT_LIST_MODEL' => PRODUCT_LIST_MODEL,
                         'PRODUCT_LIST_NAME' => PRODUCT_LIST_NAME,
                         'PRODUCT_LIST_MANUFACTURER' => PRODUCT_LIST_MANUFACTURER,
                         'PRODUCT_LIST_PRICE' => PRODUCT_LIST_PRICE,
                         'PRODUCT_LIST_QUANTITY' => PRODUCT_LIST_QUANTITY,
                         'PRODUCT_LIST_WEIGHT' => PRODUCT_LIST_WEIGHT,
                         'PRODUCT_LIST_IMAGE' => PRODUCT_LIST_IMAGE,
                         'PRODUCT_LIST_BUY_NOW' => PRODUCT_LIST_BUY_NOW);

    asort($define_list);

    $column_list = array();
    reset($define_list);
    while (list($key, $value) = each($define_list)) {
      if ($value > 0) $column_list[] = $key;
    }

    $select_column_list = '';

    for ($i=0, $n=sizeof($column_list); $i<$n; $i++) {
      switch ($column_list[$i]) {
        case 'PRODUCT_LIST_MODEL':
          $select_column_list .= 'p.products_model, ';
          break;
        case 'PRODUCT_LIST_NAME':
          $select_column_list .= 'pd.products_name, ';
          break;
        case 'PRODUCT_LIST_MANUFACTURER':
          $select_column_list .= 'm.manufacturers_name, ';
          break;
        case 'PRODUCT_LIST_QUANTITY':
          $select_column_list .= 'p.products_quantity, ';
          break;
        case 'PRODUCT_LIST_IMAGE':
          $select_column_list .= 'p.products_image, ';
          break;
        case 'PRODUCT_LIST_WEIGHT':
          $select_column_list .= 'p.products_weight, ';
          break;
      }
    }

// show the products of a specified manufacturer
    if (isset($_GET['manufacturers_id']) && !empty($_GET['manufacturers_id'])) {
      if (isset($_GET['filter_id']) && tep_not_null($_GET['filter_id'])) {
// We are asked to show only a specific category
        $listing_sql = "select " . $select_column_list . " p.products_id, SUBSTRING_INDEX(pd.products_description, ' ', 20) as products_description, p.manufacturers_id, p.products_price, p.products_tax_class_id, IF(s.status, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status, s.specials_new_products_price, p.products_price) as final_price from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_MANUFACTURERS . " m, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c where p.products_status = '1' and p.manufacturers_id = m.manufacturers_id and m.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "' and p.products_id = p2c.products_id and pd.products_id = p2c.products_id and pd.language_id = '" . (int)$languages_id . "' and p2c.categories_id = '" . (int)$_GET['filter_id'] . "'";
      } else {
// We show them all
        $listing_sql = "select " . $select_column_list . " p.products_id, SUBSTRING_INDEX(pd.products_description, ' ', 20) as products_description, p.manufacturers_id, p.products_price, p.products_tax_class_id, IF(s.status, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status, s.specials_new_products_price, p.products_price) as final_price from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_MANUFACTURERS . " m where p.products_status = '1' and pd.products_id = p.products_id and pd.language_id = '" . (int)$languages_id . "' and p.manufacturers_id = m.manufacturers_id and m.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "'";
      }
    } else {
// show the products in a given categorie
      if (isset($_GET['filter_id']) && tep_not_null($_GET['filter_id'])) {
// We are asked to show only specific catgeory
        $listing_sql = "select " . $select_column_list . " p.products_id, SUBSTRING_INDEX(pd.products_description, ' ', 20) as products_description, p.manufacturers_id, p.products_price, p.products_tax_class_id, IF(s.status, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status, s.specials_new_products_price, p.products_price) as final_price from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_MANUFACTURERS . " m, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c where p.products_status = '1' and p.manufacturers_id = m.manufacturers_id and m.manufacturers_id = '" . (int)$_GET['filter_id'] . "' and p.products_id = p2c.products_id and pd.products_id = p2c.products_id and pd.language_id = '" . (int)$languages_id . "' and p2c.categories_id = '" . (int)$current_category_id . "'";
      } else {
// We show them all
        $listing_sql = "select " . $select_column_list . " p.products_id, SUBSTRING_INDEX(pd.products_description, ' ', 20) as products_description, p.manufacturers_id, p.products_price, p.products_tax_class_id, IF(s.status, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status, s.specials_new_products_price, p.products_price) as final_price from " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_PRODUCTS . " p left join " . TABLE_MANUFACTURERS . " m on p.manufacturers_id = m.manufacturers_id left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c where p.products_status = '1' and p.products_id = p2c.products_id and pd.products_id = p2c.products_id and pd.language_id = '" . (int)$languages_id . "' and p2c.categories_id = '" . (int)$current_category_id . "'";
      }
    }

    if ( (!isset($_GET['sort'])) || (!preg_match('/^[1-8][ad]$/', $_GET['sort'])) || (substr($_GET['sort'], 0, 1) > sizeof($column_list)) ) {
      for ($i=0, $n=sizeof($column_list); $i<$n; $i++) {
        if ($column_list[$i] == 'PRODUCT_LIST_NAME') {
          $_GET['sort'] = $i+1 . 'a';
          $listing_sql .= " order by pd.products_name";
          break;
        }
      }
    } else {
      $sort_col = substr($_GET['sort'], 0 , 1);
      $sort_order = substr($_GET['sort'], 1);

      switch ($column_list[$sort_col-1]) {
        case 'PRODUCT_LIST_MODEL':
          $listing_sql .= " order by p.products_model " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_NAME':
          $listing_sql .= " order by pd.products_name " . ($sort_order == 'd' ? 'desc' : '');
          break;
        case 'PRODUCT_LIST_MANUFACTURER':
          $listing_sql .= " order by m.manufacturers_name " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_QUANTITY':
          $listing_sql .= " order by p.products_quantity " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_IMAGE':
          $listing_sql .= " order by pd.products_name";
          break;
        case 'PRODUCT_LIST_WEIGHT':
          $listing_sql .= " order by p.products_weight " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_PRICE':
          $listing_sql .= " order by final_price " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
      }
    }
    /*** Begin Header Tags SEO ***/
    if (isset($_GET['manufacturers_id']) && !empty($_GET['manufacturers_id'])) {
      $image = tep_db_query("select m.manufacturers_image, m.manufacturers_name as catname, mi.manufacturers_description as catdesc from manufacturers m, manufacturers_info mi where m.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "' and m.manufacturers_id = mi.manufacturers_id and mi.languages_id = '" . (int)$languages_id . "'");
      $image = tep_db_fetch_array($image);
      $db_query = tep_db_query("select IF(manufacturers_htc_title_tag_alt != '',manufacturers_htc_title_tag_alt, manufacturers_htc_title_tag) as htc_title, manufacturers_htc_description as htc_description from " . TABLE_MANUFACTURERS_INFO . " where languages_id = '" . (int)$languages_id . "' and manufacturers_id = '" . (int)$HTTP_GET_VARS['manufacturers_id'] . "'");
    } elseif ($current_category_id) {
      $image = tep_db_query("select c.categories_image, cd.categories_name as catname, cd.categories_description as catdesc from " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd where c.categories_id = '" . (int)$current_category_id . "' and c.categories_id = cd.categories_id and cd.language_id = '" . (int)$languages_id . "'");
      $image = tep_db_fetch_array($image);
      $db_query = tep_db_query("select IF(categories_htc_title_tag_alt != '',categories_htc_title_tag_alt, categories_htc_title_tag) as htc_title, categories_htc_description as htc_description from " . TABLE_CATEGORIES_DESCRIPTION . " where categories_id = '" . (int)$current_category_id . "' and language_id = '" . (int)$languages_id . "'");
    }
    $htc = tep_db_fetch_array($db_query);
?>
<div class="page-header">
  <h1><?php echo $htc['htc_title']; ?></h1>
</div>
    <?php /*** End Header Tags SEO ***/ ?>
<div class="contentContainer">
<?php
// optional Product List Filter
    if (PRODUCT_LIST_FILTER > 0) {
      if (isset($_GET['manufacturers_id']) && !empty($_GET['manufacturers_id'])) {
        $filterlist_sql = "select distinct c.categories_id as id, cd.categories_name as name from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c, " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd where p.products_status = '1' and p.products_id = p2c.products_id and p2c.categories_id = c.categories_id and p2c.categories_id = cd.categories_id and cd.language_id = '" . (int)$languages_id . "' and p.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "' order by cd.categories_name";
      } else {
        $filterlist_sql= "select distinct m.manufacturers_id as id, m.manufacturers_name as name from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c, " . TABLE_MANUFACTURERS . " m where p.products_status = '1' and p.manufacturers_id = m.manufacturers_id and p.products_id = p2c.products_id and p2c.categories_id = '" . (int)$current_category_id . "' order by m.manufacturers_name";
      }
      $filterlist_query = tep_db_query($filterlist_sql);
      if (tep_db_num_rows($filterlist_query) > 1) {
        echo '<div>' . tep_draw_form('filter', 'index.php', 'get') . '<p align="right">' . TEXT_SHOW . '&nbsp;';
        if (isset($_GET['manufacturers_id']) && !empty($_GET['manufacturers_id'])) {
          echo tep_draw_hidden_field('manufacturers_id', $_GET['manufacturers_id']);
          $options = array(array('id' => '', 'text' => TEXT_ALL_CATEGORIES));
        } else {
          echo tep_draw_hidden_field('cPath', $cPath);
          $options = array(array('id' => '', 'text' => TEXT_ALL_MANUFACTURERS));
        }
        echo tep_draw_hidden_field('sort', $_GET['sort']);
        while ($filterlist = tep_db_fetch_array($filterlist_query)) {
          $options[] = array('id' => $filterlist['id'], 'text' => $filterlist['name']);
        }
        echo tep_draw_pull_down_menu('filter_id', $options, (isset($_GET['filter_id']) ? $_GET['filter_id'] : ''), 'onchange="this.form.submit()"');
        echo tep_hide_session_id() . '</p></form></div>' . "\n";
      }
    }

    /*** Begin Header Tags SEO ***/ 
    if (tep_not_null($htc['htc_description'])) { 
         echo '<h2 style="text-decoration:none;">'. $htc['htc_description'] . '</h2>';
     }
    /*** End Header Tags SEO ***/ 
    include('includes/modules/product_listing.php');
?>

</div>
    <!--- BEGIN Header Tags SEO Social Bookmarks -->
    <?php if (HEADER_TAGS_DISPLAY_SOCIAL_BOOKMARKS == 'true') {
      echo '<div style="margin-top:5px; float:right;">';
      include('includes/modules/header_tags_social_bookmarks.php');
      echo '</div>';    }
    ?>
    <!--- END Header Tags SEO Social Bookmarks -->

<?php
  } else { // default page
?>

<div class="page-header">
  <h1><?php echo HEADING_TITLE; ?></h1>
</div>

<?php
  if ($messageStack->size('product_action') > 0) {
    echo $messageStack->output('product_action');
  }
?>

<div class="row">
  <?php echo $oscTemplate->getContent('index'); ?>
</div>

<?php
    
    //<!--- Begin Header Tags SEO Home Page Text and Social Bookmarks -->
    if (tep_not_null($header_tags_array['home_page_text'])) {
        echo '<div>';
        echo '<div style="padding:10px 0;">' . $header_tags_array['home_page_text'] . '</div>';
        echo '</div>';
    }

    if (HEADER_TAGS_DISPLAY_SOCIAL_BOOKMARKS == 'true') {
        echo '<div>';
        include('includes/modules/header_tags_social_bookmarks.php'); 
        echo '</div>';
    }
    //<!--- END Header Tags SEO Home Page Text and Social Bookmarks -->
    ?>

<?php
  }

  require('includes/template_bottom.php');
  require('includes/application_bottom.php');
?>
