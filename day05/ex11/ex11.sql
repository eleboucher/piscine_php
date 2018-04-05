SELECT UPPER(last_name) as 'NAME', first_name, price FROM user_card, member, subscription WHERE user_card.id_user = member.id_user_card AND member.id_sub = subscription.id_sub and subscription.price > 42 ORDER BY last_name ASC, first_name ASC;