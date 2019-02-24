import React from 'react'
import Pagination from './components/Pagination'

export default class extends React.Component {
  state = {
    isLoaded: false,
    data: [],
    pagination: null,

    filters: {
      num: null,
      invoiceable_type: null,
      invoiceable_id: null,
      status: null,
    },
    page: 1,
  };

  componentDidMount() {
    this.prepareQuery();
    if (!this.state.isLoaded) {
      this.loadData()
    }
  }

  async loadData() {
    let url = '/api/invoices';
    const query = this.prepareQuery();
    const page = `page=${this.state.page}`;

    if (page) {
      url = `${url}?${page}`
    }

    if (query) {
      url = `${url}&${query}`
    }

    try {
      const res = await axios.get(url);

      const {data, pagination} = res.data;

      this.setState({
        data, pagination, isLoaded: true,
      })

    } catch (err) {
      this.setState({
        isLoaded: true
      });
      alert('something went wring while loading invoices, check console for details');
      console.log(err)
    }
  }

  prepareQuery() {
    const {filters} = this.state;
    let q = '';

    for (let key in filters) {
      if (!filters.hasOwnProperty(key) || !filters[key]) {
        continue
      }

      if (key === 'invoiceable_id' && !filters['invoiceable_type']) {
        continue
      }

      q += `${key}=${filters[key]}&`
    }

    if (!q.length) {
      return
    }

    return q = `q=${q}`
  }

  handlePageChange = (page) => {
    this.setState({
      page,
    }, this.loadData)
  };

  render() {
    return <div style={{minHeight: '80vh'}}>
      <div className="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">
        <div>Invoices</div>
        {this.state.pagination &&
        <small>showing {this.state.pagination.from} - {this.state.pagination.to} / {this.state.pagination.total}</small>}
        <table className={'table table-striped'}>
          <thead>
          <tr>
            <th>Num</th>
            <th>Entity</th>
            <th>Created</th>
            <th>Due</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          {this.state.data.map(row => {
            return <tr key={row.id}>
              <td>{row.num}</td>
              <td>{row.invoiceable_type}</td>
              <td>{row.created_at}</td>
              <td>{row.due_at}</td>
              <td>{row.total}</td>
              <td>{row.status}</td>
            </tr>
          })}
          </tbody>
        </table>
        {this.state.pagination &&
        <small>showing {this.state.pagination.from} - {this.state.pagination.to} / {this.state.pagination.total}</small>}
        {this.state.pagination &&
        <Pagination pagination={this.state.pagination} handlePageChange={this.handlePageChange}/>}
      </div>
    </div>
  }

}
