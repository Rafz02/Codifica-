select
  reservas.id_reserva,
  hospedes.nome_completo,
  hospedagens.titulo,
  status_reservas.status_nome,
  reservas.data_checkin
from 
  reservas
inner join hospedes 
  on reservas.id_hospede = hospedes.id_hospede
inner join hospedagens 
  on reservas.id_hospedagem = hospedagens.id_hospedagem
inner join status_reservas 
  on reservas.status_id = status_reservas.id_status
where 
  status_reservas.status_nome = 'Confirmada'
  and reservas.data_checkin > '2025-05-31'
  and reservas.deletado_em is null;